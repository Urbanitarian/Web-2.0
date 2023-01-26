<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\Dictionary;
use App\Models\Magazine;
use App\Models\Pages;
use App\Models\Streetscape;
use App\Models\Masterplan;
use App\Models\Neighbourhood;
use App\Models\Webresource;
use App\Models\Country;
use App\Models\City;
use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;

use Pestopancake\LaravelBackpackNotifications\Notifications\DatabaseNotification;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GlobalController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request)
    {
        $tags = request()->input('tags');
        $size = request()->input('size');
        $status = request()->input('status');
        $city = request()->input('city');
        $country = request()->input('country');
        $category = request()->input('category');
        $popular = request()->input('popular');
        $q = request()->input('q');



        if ($request->filled('q')) { 
            $masters = Masterplan::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $streets = Streetscape::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $neighbs = Neighbourhood::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        }
        elseif ($request->filled('tags')) { 
            $masters = Masterplan::where('tags','like','%' . $tags . '%')->get();
            $streets = Streetscape::where('tags','like','%' . $tags . '%')->get();
            $neighbs = Neighbourhood::where('tags','like','%' . $tags . '%')->get();
        } elseif ($request->filled('size')) 
        { 
            $masters = Masterplan::where('size', '=', $size)->get();
            $streets = Streetscape::where('size', '=', $size)->get();
            $neighbs = Neighbourhood::where('size', '=', $size)->get();
        } 
        elseif ($request->filled('status')) 
        { 
            $masters = Masterplan::where('status', '=', $status)->get();
            $streets = Streetscape::where('status', '=', $status)->get();
            $neighbs = Neighbourhood::where('status', '=', $status)->get();
        } elseif ($request->filled('city')) 
        { 
            $masters = Masterplan::where('city', '=', $city)->get();
            $streets = Streetscape::where('city', '=', $city)->get();
            $neighbs = Neighbourhood::where('city', '=', $city)->get();
        } elseif ($request->filled('country')) 
        { 
            $masters = Masterplan::where('country', '=', $country)->get();
            $streets = Streetscape::where('country', '=', $country)->get();
            $neighbs = Neighbourhood::where('country', '=', $country)->get();
        }  elseif ($request->filled('category')) 
        { 
            if ($category == 'All') {
                $masters = Masterplan::all();
                $streets = Streetscape::all();
                $neighbs = Neighbourhood::all();
            } else {
                $masters = Masterplan::where('category', '=', $category)->get();
                $streets = Streetscape::where('category', '=', $category)->get();
                $neighbs = Neighbourhood::where('category', '=', $category)->get();
            }
        } elseif ($request->filled('popular')) 
        { 
            if ($popular == 'new') {
                $masters = Masterplan::orderBy('id', 'desc')->get();
                $streets = Streetscape::orderBy('id', 'desc')->get();
                $neighbs = Neighbourhood::orderBy('id', 'desc')->get();
            }
            else if ($popular == 'old'){
                $masters = Masterplan::orderBy('id', 'asc')->get();
                $streets = Streetscape::orderBy('id', 'asc')->get();
                $neighbs = Neighbourhood::orderBy('id', 'asc')->get();
            }
           
        } else
        {
            $masters = Masterplan::all();
            $streets = Streetscape::all();
            $neighbs = Neighbourhood::all();
        }

        $all_data = array_merge(
            $masters->toArray(),
            $streets->toArray(),
            $neighbs->toArray()
        );
        shuffle($all_data);

        $units = new LengthAwarePaginator(
            array_slice($all_data, 0, 8, true),
            count($all_data),
            8
        );



        //other parts
        $cities = City::all();
        $countries = Country::All();
        $neighbourhoods = neighbourhood::where('id', '!=', null)->limit(8)->inRandomOrder()->get();
        $masterplans = Masterplan::where('id', '!=', null)->limit(8)->inRandomOrder()->get();
        $streetscapes = Streetscape::where('id', '!=', null)->limit(3)->inRandomOrder()->get();
        $webresources = Webresource::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $magazines = Magazine::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $dictionary = Dictionary::where('id', '!=', null)->limit(10)->inRandomOrder()->get();
        $insta = Setting::get('curator_link');

        return view(
            'index',
            compact('dictionary','magazines','webresources','insta','streetscapes','masterplans','countries','cities','neighbourhoods','units', 'all_data'
            )
        );
    }

    static function alldata(){

        $masters = Masterplan::all();
        $streets = Streetscape::all();
        $neighbs = Neighbourhood::all();

        $all_data = array_merge(
            $masters->toArray(),
            $streets->toArray(),
            $neighbs->toArray()
        );

        return $all_data;
    }



    static function pages()
    {
        $pages = Pages::all();
        return $pages;
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function neighbourhoods(Request $request)
    {
        $q = request()->input('q');
        $size = request()->input('size');
        $tags = request()->input('tags');

        if ($q) {
            $neighbourhoods = neighbourhood::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->paginate(8);
        } elseif ($size) {
            $neighbourhoods = neighbourhood::where('size', 'like', '%' . $size . '%')->paginate(8);
        } elseif ($tags) {
            $neighbourhoods = neighbourhood::where('tags', 'like', '%' . $tags . '%')->paginate(8);
        } else {
            $neighbourhoods = neighbourhood::paginate(8);
        }

        return view('neighbourhoods', compact('neighbourhoods'));
    }

    public function neighbourhoods_post(Request $request)
    {
        $id = $request->id;
        $neighbourhood = neighbourhood::all();
        $neighbourhoods = neighbourhood::where('id', '!=', null)->limit(4)
            ->inRandomOrder()
            ->get();
        return view('neighbourhoods_post', compact('neighbourhood', 'neighbourhoods', 'id'));
    }

    public function streetscapes(Request $request)
    {
        $q = request()->input('q');
        $size = request()->input('size');

        if ($q) {
            $streetscapes = Streetscape::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->paginate(5);
        } elseif ($size) {
            $streetscapes = Streetscape::where('size', 'like', '%' . $size . '%')->paginate(5);
        } else {
            $streetscapes = Streetscape::paginate(5);
        }

        return view('streetscapes', compact('streetscapes'));
    }

    public function streetscapes_post(Request $request)
    {
        $id = $request->id;
        $allstreetscapes = Streetscape::where('id', '!=', null)->limit(3)->inRandomOrder()->get();
        $streetscapes = Streetscape::all();
        return view('streetscapes_post', compact('streetscapes', 'allstreetscapes', 'id'));
    }

    public function masterplans(Request $request)
    {
        $q = request()->input('q');
        $size = request()->input('size');
        
        if ($q) {
            $masterplans = Masterplan::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->paginate(10);
        } elseif ($size) {
            $masterplans = Masterplan::where('size', 'like', '%' . $size . '%')->paginate(10);
        } else {
            $masterplans = Masterplan::paginate(10);
        }
        return view('masterplans', compact('masterplans'));
    }

    public function masterplans_post(Request $request)
    {
        $id = $request->id;
        $masterplan = Masterplan::all();
        $masterplans = Masterplan::where('id', '!=', null)
            ->inRandomOrder()
            ->get();


        return view('masterplans_post', compact('masterplan', 'masterplans', 'id'));
    }

    public function alldictionary()
    {
        $dictionary = Dictionary::paginate(10);

        return view('dictionaries', compact('dictionary'));
    }

    public function allwebresources()
    {
        $webresources = Webresource::paginate(10);
        return view('webresources', compact('webresources'));
    }

    public function webresources_post(Request $request)
    {
        $id = $request->id;
        $webresource = Webresource::where('id', '=', $id)->get();
        return view('webresources_post', compact('webresource'));
    }

    public function dictionaries_post(Request $request)
    {
        $id = $request->id;
        $dictionaries = Dictionary::all();
        $dictionary = Dictionary::where('id', '!=', null)
            ->inRandomOrder()
            ->limit(5)
            ->get();
        return view('dictionaries_post', compact('dictionaries', 'dictionary', 'id'));
    }

    public function import(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:xls,xlsx'
        // ]);
        // $file = $request->file('file');
        // Excel::import(new DictionaryImport, $file);
        dd($request->all());
        return back()->with('success', 'All good!');
    }

    public function read(Request $request)
    {
        $magazines = Magazine::where('id', '!=', null);

        return view('read', [
            'magazines' => $magazines->paginate(15),
        ]);
    }

    static function master()
    {
        $master = Masterplan::all();
        //count masterplans
        $mastercount = $master->count();
        return $mastercount;
    }

    static function neigh()
    {
        $neigh = neighbourhood::all();
        //count neighbourhoods
        $neighcount = $neigh->count();
        return $neighcount;
    }

    static function street()
    {
        $street = Streetscape::all();
        //count streetscapes
        $streetcount = $street->count();
        return $streetcount;
    }

    public function deleteUser(Request $id)
    {
        $thisuser = User::where('id', $id)->get();
        $thisuser[0]->delete();
        Session::flush();
        Auth::logout();
        //$request->session()->invalidate();
        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        //$request->session()->invalidate();
        return view('index');
    }

    static function getUsers()
    {
        //retrive all users
        $users = User::all();
        return $users;
    }

    static function getSessions()
    {
        //retrive all users
        $users_session = Session::all();
        return $users_session;
    }

    static function getLegal()
    {
        return view('legal');
    }

    
    static function association()
    {
        return view('association');
    }

    static function getConf()
    {
        return view('confidentialite');
    }

    static function cookies()
    {
        return view('cookies');
    }

    static function work()
    {
        return view('work');
    }
}

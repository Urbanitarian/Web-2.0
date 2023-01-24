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
    public function getAll()
    {
        $all_data;
        $masters = Masterplan::select('id', 'title', 'author', 'image', 'tags', 'city', 'country', 'status', 'size', 'category', 'location')->get();
        foreach($masters as $master) {
            $all_data[] = array(
                'id_master' => $master->id,
                'title' => $master->title,
                'author' => $master->author,
                'image' => $master->image,
                'tags' => $master->tags,
                'city' => $master->city,
                'country' => $master->country,
                'status' => $master->status,
                'size' => $master->size,
                'category' => $master->category,
                'location' => $master->location,
            );
            
        }

        $streets = Streetscape::select('id', 'title', 'author', 'image', 'tags', 'city', 'country', 'status', 'size', 'category', 'location')->get();
        foreach($streets as $street) {
            $all_data[] = array(
                'id_street' => $street->id,
                'title' => $street->title,
                'author' => $street->author,
                'image' => $street->image,
                'tags' => $street->tags,
                'city' => $street->city,
                'country' => $street->country,
                'status' => $street->status,
                'size' => $street->size,
                'category' => $street->category,
                'location' => $street->location,
            );
            
        }
        $neighbs = Neighbourhood::select('id', 'title','author', 'image', 'tags', 'city', 'country', 'status', 'size', 'category', 'location')->get();
        foreach($neighbs as $neighb) {
            $all_data[] = array(
                'id_neighb' => $neighb->id,
                'title' => $neighb->title,
                'author' => $neighb->author,
                'image' => $neighb->image,
                'tags' => $neighb->tags,
                'city' => $neighb->city,
                'country' => $neighb->country,
                'status' => $neighb->status,
                'size' => $neighb->size,
                'category' => $neighb->category,
                'location' => $neighb->location,
            );
            
        }
        
        shuffle($all_data);

         $units = new LengthAwarePaginator(
             array_slice($all_data, 0 ,8,  true),
             count($all_data),
             8,
         );

   
     
        $cities = City::all();
        $countries = Country::All();
        $neighbourhoods = neighbourhood::where('id', '!=', null)->limit(8)->inRandomOrder()->get();
        $masterplans = Masterplan::where('id', '!=', null)->limit(8)->inRandomOrder()->get();
        $streetscapes = Streetscape::where('id', '!=', null)->limit(3)->inRandomOrder()->get();
        $webresources = Webresource::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $magazines = Magazine::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $dictionary = Dictionary::where('id', '!=', null)->limit(10)->inRandomOrder()->get();
    
        $insta = Setting::get('curator_link');
        return view('index', compact(
            'dictionary',
             'magazines',
              'webresources',
               'insta',
                'streetscapes',
                 'masterplans',
                  'countries',
                   'cities',
                    'neighbourhoods',
                    'units'
                    ));
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

    public function neighbourhoods()
    {
        $neighbourhoods = neighbourhood::paginate(8);
        return view('neighbourhoods', compact('neighbourhoods'));
    }

    public function neighbourhoods_post()
    {
        return view('neighbourhoods_post');
    }

    public function streetscapes()
    {
        $streetscapes = Streetscape::where('id', '!=', null)->paginate(5);
        return view('streetscapes', compact('streetscapes'));
    }

    public function streetscapes_post(Request $request)
    {   $id = $request->id;
        $streetscapes = Streetscape::where('id', '=', $id)->get();
        return view('streetscapes_post', compact('streetscapes'));
    }

    public function masterplans()
    {
        $masterplans = Masterplan::paginate(10);
        return view('masterplans', compact('masterplans'));
    }

    public function masterplans_post(Request $request)
    {
        $id = $request->id;
        $masterplan = Masterplan::where('id', '=', $id)->get();
        $masterplans = Masterplan::where('id', '!=', null)->inRandomOrder()->get();
        
        return view('masterplans_post', compact('masterplan', 'masterplans'));
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
        $dictionary = Dictionary::where('id', '=', $id)->get();
        return view('dictionaries_post', compact('dictionary'));
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
    

   
    static function version()
    {
        $filename = '../public/build/manifest.json';
        // $ver = date('d/m/y H:i', filemtime($filename) + 3600);
        $ver = '1.1.0';
        $version = $ver;
        return $version;
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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\Dictionary;
use App\Models\Magazine;
use App\Models\Pages;
use App\Models\Streetscape;
use App\Models\Masterplan;
use App\Models\Team;
use App\Models\Neighbourhood;
use App\Models\Webresource;
use App\Models\Country;
use App\Models\City;
use App\Models\Mindscape;
use App\Imports\MasterplansImport;
use App\Imports\StreetscapesImport;
use App\Imports\NeighbourhoodsImport;
use App\Imports\DictionariesImport;
use App\Imports\MagazinesImport;
use App\Imports\WebresourcesImport;
use Maatwebsite\Excel\Facades\Excel;
use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;
use App\Mail\MyMailsubmit;
use App\Models\Collection;
use App\Models\CollectionName;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Pestopancake\LaravelBackpackNotifications\Notifications\DatabaseNotification;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            $masters = Masterplan::where('title', 'like', '%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $streets = Streetscape::where('title', 'like', '%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $neighbs = Neighbourhood::where('title', 'like', '%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        } elseif ($request->filled('tags')) {
            $tags = explode(',', $tags);
            $masters = Masterplan::whereIn('tags', $tags)->get();
            $streets = Streetscape::whereIn('tags', $tags)->get();
            $neighbs = Neighbourhood::whereIn('tags', $tags)->get();
        } elseif ($request->filled('size')) {
            $masters = Masterplan::where('size', '=', $size)->get();
            $streets = Streetscape::where('size', '=', $size)->get();
            $neighbs = Neighbourhood::where('size', '=', $size)->get();
        } elseif ($request->filled('status')) {
            $masters = Masterplan::where('status', '=', $status)->get();
            $streets = Streetscape::where('status', '=', $status)->get();
            $neighbs = Neighbourhood::where('status', '=', $status)->get();
        } elseif ($request->filled('city')) {
            $masters = Masterplan::where('city', '=', $city)->get();
            $streets = Streetscape::where('city', '=', $city)->get();
            $neighbs = Neighbourhood::where('city', '=', $city)->get();
        } elseif ($request->filled('country')) {
            $masters = Masterplan::where('country', '=', $country)->get();
            $streets = Streetscape::where('country', '=', $country)->get();
            $neighbs = Neighbourhood::where('country', '=', $country)->get();
        } elseif ($request->filled('category')) {
            if ($category == 'All') {
                $masters = Masterplan::all();
                $streets = Streetscape::all();
                $neighbs = Neighbourhood::all();
            } else {
                $masters = Masterplan::where('category', '=', $category)->get();
                $streets = Streetscape::where('category', '=', $category)->get();
                $neighbs = Neighbourhood::where('category', '=', $category)->get();
            }
        } elseif ($request->filled('popular')) {
            if ($popular == 'new') {
                $masters = Masterplan::orderBy('id', 'desc')->get();
                $streets = Streetscape::orderBy('id', 'desc')->get();
                $neighbs = Neighbourhood::orderBy('id', 'desc')->get();
            } else if ($popular == 'old') {
                $masters = Masterplan::orderBy('id', 'asc')->get();
                $streets = Streetscape::orderBy('id', 'asc')->get();
                $neighbs = Neighbourhood::orderBy('id', 'asc')->get();
            }
        } else {
            $masters = Masterplan::all();
            $streets = Streetscape::all();
            $neighbs = Neighbourhood::all();
        }

        //count number of masterplan
        $masternum = Masterplan::where('active', '1')->count();
        $streetnum = Streetscape::where('active', '1')->count();
        $urbannum = Neighbourhood::where('active', '1')->count();


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
        $neighbourhoods = neighbourhood::where('id', '!=', null)->limit(4)->inRandomOrder()->get();
        $masterplans = Masterplan::where('id', '!=', null)->limit(8)->inRandomOrder()->get();
        $streetscapes = Streetscape::where('id', '!=', null)->limit(3)->inRandomOrder()->get();
        $webresources = Webresource::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $magazines = Magazine::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $dictionary = Dictionary::where('id', '!=', null)->limit(10)->inRandomOrder()->get();
        $insta = Setting::get('curator_link');

        return view(
            'index',
            compact(
                'dictionary',
                'magazines',
                'webresources',
                'insta',
                'streetscapes',
                'masterplans',
                'countries',
                'cities',
                'neighbourhoods',
                'units',
                'all_data',
                'masternum',
                'streetnum',
                'urbannum'
            )
        );
    }

    static function alldata()
    {

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

    public function people()
    {
        $team = Team::all()->sortByDesc('id');

        return view('people', compact('team'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit()
    {
        return view('submit');
    }

    public function submit_project(Request $request)
    {
        $usermail = env('MAIL_USERNAME');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

        Mail::to($usermail)->queue(new MyMailsubmit($request->all()));
        return back()->with('Mail_envoye', 'ok');
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
            $neighbourhoods = neighbourhood::where('title', 'like', '%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->paginate(8);
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
        $nb = Neighbourhood::find($id);
        $urbanscape = neighbourhood::all();
        $urbanscapes = neighbourhood::where('id', '!=', null)->limit(4)
            ->inRandomOrder()
            ->get();
        $streetscapes = Streetscape::where('id', '!=', null)
            ->inRandomOrder()
            ->get();
        $masterplans = Masterplan::where('id', '!=', null)
            ->inRandomOrder()
            ->get();


        // dd($masterplans);

        views($nb)->record();



        $collections = CollectionName::all();

        return view('neighbourhoods_post', compact('urbanscape', 'collections', 'urbanscapes', 'streetscapes', 'masterplans',  'id'));
    }

    public function streetscapes(Request $request)
    {
        $q = request()->input('q');
        $tags = request()->input('tags');

        if ($q) {
            $streetscapes = Streetscape::where('title', 'like', '%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->paginate(5);
        } elseif ($tags) {
            $streetscapes = Streetscape::where('title', 'like', '%' . $tags . '%')->orWhere('tags', 'like', '%' . $tags . '%')->orWhere('category', 'like', '%' . $tags . '%')->orWhere('city', 'like', '%' . $tags . '%')->orWhere('country', 'like', '%' . $tags . '%')->paginate(5);
        } else {
            $streetscapes = Streetscape::paginate(5);
        }

        return view('streetscapes', compact('streetscapes'));
    }

    public function streetscapes_post(Request $request)
    {

        $id = $request->id;
        $st = Streetscape::find($id);


        $streetscapes = Streetscape::all();

        $masterplans = Masterplan::where('id', '!=', null)
            ->inRandomOrder()
            ->get();

        $allstreetscapes = Streetscape::where('id', '!=', null)
            ->inRandomOrder()
            ->get();
        $urbanscapes =  Neighbourhood::where('id', '!=', null)
            ->inRandomOrder()
            ->get();

        views($st)->record();

        $collections = CollectionName::all();

        return view('streetscapes_post', compact('streetscapes', 'collections', 'allstreetscapes', 'urbanscapes', 'masterplans', 'id'));
    }

    public function masterplans(Request $request)
    {
        $q = request()->input('q');
        $size = request()->input('size');
        $city = request()->input('city');
        $country = request()->input('country');

        if ($q) {
            $masterplans = Masterplan::where('title', 'like', '%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->paginate(10);
        } elseif ($size) {
            $masterplans = Masterplan::where('size', 'like', '%' . $size . '%')->paginate(10);
        } elseif ($request->filled('city')) {
            $masters = Masterplan::where('city', '=', $city)->paginate(10);
            $streets = Streetscape::where('city', '=', $city)->paginate(10);
            $neighbs = Neighbourhood::where('city', '=', $city)->paginate(10);
        } elseif ($request->filled('country')) {
            $masters = Masterplan::where('country', '=', $country)->paginate(10);
            $streets = Streetscape::where('country', '=', $country)->paginate(10);
            $neighbs = Neighbourhood::where('country', '=', $country)->paginate(10);
        } else {
            $masterplans = Masterplan::paginate(10);
        }

        $cities = City::all();
        $countries = Country::All();

        return view('masterplans', compact('masterplans', 'cities', 'countries'));
    }

    public function masterplans_post(Request $request)
    {
        $id = $request->id;
        $mas = Masterplan::find($id);
        $masterplan = Masterplan::all();
        $masterplans = Masterplan::where('id', '!=', null)
            ->inRandomOrder()
            ->get();

        $streetscapes = Streetscape::where('masterplan_id',$masterplans->id)
            ->get();
        $urbanscapes =  Neighbourhood::where('id', '!=', null)
            ->inRandomOrder()
            ->get();


        views($mas)->record();

        $collections = CollectionName::all();


        return view('masterplans_post', compact('masterplan', 'masterplans', 'collections', 'streetscapes', 'urbanscapes', 'id'));
    }

    public function alldictionary()
    {
        $dictionary = Dictionary::paginate(15);

        return view('dictionaries', compact('dictionary'));
    }

    public function mindscapes()
    {
        $mindscapes = Mindscape::paginate(10);

        return view('mindscapes', compact('mindscapes'));
    }

    public function mindscapes_post(Request $request)
    {
        $id = $request->id;
        $allmindscapes = Mindscape::where('id', '!=', null)->limit(3)->inRandomOrder()->get();
        $mindscapes = Mindscape::all();
        return view('mindscapes_post', compact('mindscapes', 'allmindscapes', 'id'));
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

    static function mind()
    {
        $mind = Mindscape::all();
        //count mindscapes
        $mindcount = $mind->count();
        return $mindcount;
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

    static function subscribe()
    {
        return view('subscribe');
    }

    static function work()
    {
        return view('work');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

        if ($request->dataType == "masterplans") {
            Excel::import(new MasterplansImport, $file);
        } elseif ($request->dataType == "neighbourhoods") {
            Excel::import(new NeighbourhoodsImport, $file);
        } elseif ($request->dataType == "streetscapes") {
            Excel::import(new StreetscapesImport, $file);
        } elseif ($request->dataType == "dictionaries") {
            Excel::import(new DictionariesImport, $file);
        } elseif ($request->dataType == "magazines") {
            Excel::import(new MagazinesImport, $file);
        } elseif ($request->dataType == "webresources") {
            Excel::import(new WebresourcesImport, $file);
        } else {
            \Alert::success('Error.')->flash();
            return redirect('/admin')->with('error', 'Invalid data type.');
        }
        \Alert::success('Excel data imported successfully.')->flash();
        return redirect('/admin')->with('success', 'Data imported successfully.');
    }

    public function userLogin(Request $req)
    {
        $user = User::where('email', $req->email)->orWhere('role', 'user')->first();
        if ($user) {
            if (Hash::make($user->password == $req->password)) {
                $req->session()->put('FRONT_USER_LOGIN', true);
                $req->session()->put('FRONT_USER_ID', $user->id);
                $req->session()->put('FRONT_USER_NAME', $user->name);
                return redirect('/');
            }
        } else {
            \Alert::error('User with this email does not exist.')->flash();
            return redirect('/')->with('error', 'User with this email does not exist.');
        }
    }



    public function login(Request $req)
    {
        if (!$req->session()->get('FRON_USER_LOGIN')) {
            return view('parts.login');
        }
    }
}

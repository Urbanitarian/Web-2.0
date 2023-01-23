<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\Dictionary;
use App\Models\Magazine;
use App\Models\Pages;
use App\Models\Streetscape;
use App\Models\Webresource;
use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;

use Pestopancake\LaravelBackpackNotifications\Notifications\DatabaseNotification;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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
        $streetscapes = Streetscape::where('id', '!=', null)->limit(3)->inRandomOrder()->get();
        $webresources = Webresource::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $magazines = Magazine::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $dictionary = Dictionary::where('id', '!=', null)->limit(10)->inRandomOrder()->get();
    
        $insta = Setting::get('curator_link');
        return view('index', compact('dictionary', 'magazines', 'webresources', 'insta', 'streetscapes'));
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
        return view('neighbourhoods');
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

    public function masterplans()
    {
        return view('masterplans');
    }

    public function masterplans_post()
    {
        return view('masterplans_post');
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


    public function dictionaries_post()
    {
        return view('dictionaries_post');
    }

    public function import(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:xls,xlsx'
        // ]);
        // $file = $request->file('file');
        // Excel::import(new DictionaryImport, $file);
        dd('okok');
        return back()->with('success', 'All good!');
    }


    public function dictionary()
    {
        return view('dictionaries_post');
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

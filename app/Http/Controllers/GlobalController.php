<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\Dictionary;
use App\Models\Magazine;
use App\Models\Webresource;

use Carbon\Carbon;

use Pestopancake\LaravelBackpackNotifications\Notifications\DatabaseNotification;
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
        $webresources = Webresource::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $magazines = Magazine::where('id', '!=', null)->limit(5)->inRandomOrder()->get();
        $dictionary = Dictionary::where('id', '!=', null)->limit(10)->inRandomOrder()->get();
        $tags = Tag::all();
        
        return view('index', compact('dictionary', 'tags', 'magazines', 'webresources'));
    }

  

    static function pages()
    {
        $pages = Pages::all();
        return $pages;
    }

    public function help()
    {
        return view('help');
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
        return view('streetscapes');
    }

    public function streetscapes_post()
    {
        return view('streetscapes_post');
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
        return view('dictionaries');
    }

    public function allwebresources()
    {
        return view('webresources');
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

    public function read()
    {
        $magazines = Magazine::all();
        return view('read', compact('magazines'));
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

   
}

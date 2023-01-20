<?php

namespace App\Http\Controllers;

use App\Models\Cadeaux;
use App\Models\Commandes;
use App\Models\Concours;
use App\Models\Infosperso;
use App\Models\User;
use App\Models\Games;
use App\Models\Pages;
use App\Models\Packs;
use Carbon\Carbon;
use App\Models\Paiements;
use App\Models\Scores;
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
        
        return view('index');
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

    public function streetscapes()
    {
        return view('streetscapes');
    }

    public function masterplans()
    {
        return view('masterplans');
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

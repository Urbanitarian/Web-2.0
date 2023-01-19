<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Mail\MyMail;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendMessage (Request $request) {
        $usermail = env('MAIL_USERNAME');
       
        $this->validate($request, [ 'email' => 'required' ]);
        $this->validate($request, [ 'name' => 'required' ]);
        $this->validate($request, [ 'message' => 'required|string' ]);


       if ($request->session()->exists('mail')) {
             return back()->with('already_send', 'ok');
        }
       else 
       {
        Mail::to($usermail)->queue(new MyMail($request->all()));

        $request->session()->put('mail', '1');

        return back()->with('Mail_envoye', 'ok');
       }
       
    }
}

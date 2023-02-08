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
       
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

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

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Mail;
use App\Mail\AboMail;
use Pestopancake\LaravelBackpackNotifications\Notifications\DatabaseNotification;

class CheckIfAdmin
{
    /**
     * Checked that the logged in user is an administrator.
     *
     * --------------
     * VERY IMPORTANT
     * --------------
     * If you have both regular users and admins inside the same table, change
     * the contents of this method to check that the logged in user
     * is an admin, and not a regular user.
     *
     * Additionally, in Laravel 7+, you should change app/Providers/RouteServiceProvider::HOME
     * which defines the route where a logged in user (but not admin) gets redirected
     * when trying to access an admin route. By default it's '/home' but Backpack
     * does not have a '/home' route, use something you've built for your users
     * (again - users, not admins).
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @return bool
     */
    private function checkIfUserIsAdmin($user)
    {
        if ($user->role == 'admin') {
            //   dd('admin');
            return true;
        } elseif ($user->role == 'user0') {
            // if just registered user send welcome mail

            $mailcontent = [
                'email' => env('MAIL_USERNAME'),
                'message' =>
                    'Bienvenue ' .
                    $user->name .
                    ' Votre Compte à été crée avec succés',
            ];
            Mail::to($user->email)->queue(new AboMail($mailcontent));
            $user->role = 'user';
            $user->save();

            //create notification
            $admin = backpack_user()->find(1);
            $admin->notify(
                new DatabaseNotification(
                    ($type = 'info'), // info / success / warning / error
                    ($message = 'Nouvelle Inscription'),
                    ($messageLong = 'Nouvelle Inscription: ' . $user->email)
                       // rand(1, 99999)), // optional
                    // ($href = '/some-custom-url'), // optional, e.g. backpack_url('/example')
                   // ($hrefText = 'Go to custom URL') // optional
                )
            );

            
            return true;
        } elseif ($user->role == 'user') {
            //   dd('user');
            return true;
        }
    }

    /**
     * Answer to unauthorized access request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    private function respondToUnauthorizedRequest($request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response(trans('backpack::base.unauthorized'), 401);
        } else {
            return redirect()->guest(backpack_url('login'));
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (backpack_auth()->guest()) {
            return $this->respondToUnauthorizedRequest($request);
        }

        if (!$this->checkIfUserIsAdmin(backpack_user())) {
            return $this->respondToUnauthorizedRequest($request);
        }

        return $next($request);
    }
}

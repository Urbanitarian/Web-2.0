<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{

    // Les tableaux des providers autorisés
    protected $providers = ["google", "twitter", "linkedin"];

    # La vue pour les liens vers les providers
    public function loginRegister()
    {
        return view("socialite.login-register");
    }

    # redirection vers le provider
    public function redirect(Request $request)
    {

        $provider = $request->provider;

        // On vérifie si le provider est autorisé
        if (in_array($provider, $this->providers)) {

            return Socialite::driver($provider)->redirect(); // On redirige vers le provider
        }
        abort(404); // Si le provider n'est pas autorisé
    }

    // Callback du provider
    public function callback(Request $request)
    {

        $provider = $request->provider;

        if (in_array($provider, $this->providers)) {

            // Les informations provenant du provider
            $s_user = Socialite::driver($provider)->user();


            # Social login - register
            $email = $s_user->getEmail(); // L'adresse email
            $name = $s_user->getName(); // le nom

            # 1. On récupère l'utilisateur à partir de l'adresse email
            $user = User::where("email", $email)->first();

            # 2. Si l'utilisateur existe
            if (isset($user)) {

                // Mise à jour des informations de l'utilisateur
                $user->name = $name;
                $user->save();

                # 3. Si l'utilisateur n'existe pas, on l'enregistre
            } else {
                // Enregistrement de l'utilisateur
                switch ($provider) {
                    case 'google':
                        $user = User::create([
                            'google_id' => $s_user->id,
                            'name' => $name,
                            'email' => $email,
                            'role' => 'user',
                            'password' => bcrypt("12345678") // On attribue un mot de passe
                        ]);
                        break;
                    case 'twitter':
                        $user = User::create([
                            'twitter_id' => $s_user->id,
                            'name' => $name,
                            'email' => $email,
                            'role' => 'user',
                            'password' => bcrypt("12345678") // On attribue un mot de passe
                        ]);
                        break;

                    default:
                        $user = User::create([
                            'linkedin_id' => $s_user->id,
                            'name' => $name,
                            'email' => $email,
                            'role' => 'user',
                            'password' => bcrypt("12345678") // On attribue un mot de passe
                        ]);
                        break;
                }
            }

            # 4. On connecte l'utilisateur
            Auth::login($user);

            # 5. On redirige l'utilisateur vers /home
            if (Auth()->check()) {

                $request->session()->put('FRONT_USER_LOGIN', true);
                $request->session()->put('FRONT_USER_ID', $user->id);
                $request->session()->put('FRONT_USER_NAME', $user->name);
                return redirect('/');
            };
        }
        abort(404);
    }
}

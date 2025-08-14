<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        return Socialite::driver('google')->scopes(['email', 'profile'])->redirect();
    }
    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->stateless()->user();

            $user = User::where('email', $google_user->getEmail())->first();

            if (!$user){
                $new_user = User::updateOrCreate([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => bcrypt('google-user' . now()),
                ]);

                Auth::login($new_user);

//                Auth::guard('user')->login($new_user);

                return redirect()->intended('/');
            }
            else{
                Auth::login($user);
                return redirect()->intended('/');
            }

        } catch (\Throwable $th){
            dd('Something went wrong!'. $th->getMessage());

        }
    }

}

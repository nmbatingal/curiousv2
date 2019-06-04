<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver = 'google')
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($driver = 'google')
    {
        try {
            
            $user       = Socialite::driver($driver)->user();
            $existUser  = User::where('email', $user->email)->first();

            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $newUser                    = new User;
                $newUser->provider_name     = $driver;
                $newUser->provider_id       = $user->id;
                $newUser->name              = $user->name;
                $newUser->first_name        = $user->user['given_name'];
                $newUser->last_name         = $user->user['family_name'];
                $newUser->email             = $user->email;
                $newUser->email_verified_at = now();
                $newUser->avatar            = $user->avatar;
                $newUser->save();

                Auth::loginUsingId($newUser->id);
            }

            return redirect($this->redirectPath());
            // return response()->json(['google'=> $user]);
            // return dd($googleUser);
        } 
        catch (Exception $e) {
            return response()->json($e);
        }
    }
}

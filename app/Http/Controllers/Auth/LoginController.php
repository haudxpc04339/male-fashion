<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class LoginController extends Controller
{
    // use AuthenticatesUsers;

    protected function _registerOrLoginUser($data) {

        $user = User::where('email', '=', $data->email)->first();
        if (!$user){

           $user = new User();
           $user->name = $data->name;
           $user->email = $data->email;
           $user->provider_id = $data->id;
            $user->save();
        }

        Auth::login($user);
    }

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function create() {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        
        if (Auth::attempt(
            ['email' => $request->email,
             'password' => $request->password,
            ], $request->remember)) {
                if (Auth::user()->role_as == '1'){
                    return redirect()->route('admin.dashboard');
        
                }else {
                    return redirect()->route('home');
                }
        }else {
            return redirect()->back();
        }

       
    }

    public function logout() {
        \Session::flush();
        \Auth::logout();

        return redirect()->route('home');
    }

 
    public function handleGoogleCallback() {
        $user = Socialite::driver('google')->user();
        

         $this->_registerOrLoginUser($user);

        return redirect()->route('home'); 
    }
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }


    public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback() {
        $user = Socialite::driver('facebook')->user();
      
        $this->_registerOrLoginUser($user);

        return redirect()->route('home');

    }
}

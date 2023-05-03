<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function show(){

        if(Auth::check()){
            return redirect('/posts');
        }
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        if (!Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('Correo electrónico o Contraseña incorrectos');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        return redirect('/posts');
    }

    public function logout(){
        Session::flush(); 
        Auth::logout();

        return redirect()->to('/login');
    }
}

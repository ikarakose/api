<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

    public function login(){

        return view("pages.login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $credentials['level'] = 10;
  
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect(route("dashboard"));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }


}

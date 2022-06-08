<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('web.auth.login');
    }

    function login(Request $request){

        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password
        ])){
            return redirect('/');
        }
        return redirect('/')->with('error','Failed login');
    }

    function logout(){
        Auth::logout();
        // return redirect()->route('web.auth.login');
        return redirect()->back();

    }
    
}

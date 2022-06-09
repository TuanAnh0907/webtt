<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){

        return view('admin.login.index');
    }

    public function checkLogin( Request $request){
        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password,
            'is_admin' => 1,
        ])){
            return redirect()->route('admin.home');
        }
        return redirect()->route('admin.auth.login')->with('error','Failed login');
            
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.auth.login');
    }

    public function home(){

        return view('admin.layout.home');
    }

    public function profile(){
        return view('admin.login.profile');
    }

    public function updateProfile(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = Auth::user();
        $name = [
            'name' => $request->name
        ];

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|min:6|max:32',
                'confirm' => 'same:password',
            ]);
            $data['password'] = bcrypt($request->password);
        }

        $user->DB::update($name); 

        return redirect()->route('admin.profile.index')->with('success', 'Updated successfully');
    }

}

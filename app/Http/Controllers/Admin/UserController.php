<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\User;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){

        $users = User::paginate(20);

        return view('admin.user.list', compact('users'));

    }

    public function create(){
        
        return view('admin.user.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|max:32',
            'confirm' => 'same:password',
            'is_admin' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash::make($request->password),
            'is_admin' => $request->is_admin
        ]);

        return redirect()->route('admin.user.index');
    }   

    public function edit($id){
        $users = User::find($id);
        return view('admin.user.edit',compact('users',));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'is_admin' => 'required'
        ]);

        $user = User::find($id);
        $date = [
            'name' => $request->name,
            'is_admin' => $request->is_admin
        ];

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|min:6|max:32',
                'confirm' => 'same:password',
            ]);
            $data['password'] = bcrypt($request->password);
        }

        $user->update($date); 

        return redirect()->route('admin.user.index');
    }

    public function delete($id){
        User::where('id', $id)->delete();
        return Redirect()->route('admin.user.index');
    }
}
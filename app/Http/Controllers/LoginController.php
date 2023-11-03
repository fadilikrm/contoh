<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/admin/dashboard');
        }  
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function register(){
        return view('login.register');
    }

    public function simpanregister(Request $request){
        User::create([
            'name'=> $request->name,
            'level' => 'pengunjung',
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login');
    }
}

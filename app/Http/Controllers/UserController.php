<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{ 
    public function manajemenuser(){
        $user = User::all();
        return view('admin.manajemenuser', compact(['user']));
    }

    public function createuser(){
        return view('admin.createuser');
    }

    public function storeuser(Request $request){
        User::create($request->except(['_token','submit']));
        return redirect('/admin/manajemenuser');
    }

    public function destroyuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/manajemenuser');
    }
}

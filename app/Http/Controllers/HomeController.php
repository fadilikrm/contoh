<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index(){
        return view('admin.dashboard');
    }

    protected function produk(){
        return view('admin.produk');
    }


}

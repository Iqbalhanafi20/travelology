<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function detail_place(){
        return view('detail');
    }

    public function login(){
        return view('login');
    }

    public function checkout(){
        return view('checkout');
    }

    public function confirmation(){
        return view('confirmation');
    }
}

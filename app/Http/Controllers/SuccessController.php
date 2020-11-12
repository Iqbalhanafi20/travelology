<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index(Request $request){
        return view('pages.success');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function index(Request $request){
        return view('pages.confirmation');
    }
}

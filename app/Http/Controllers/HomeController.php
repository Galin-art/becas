<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin',['only'=>'index']);
    }


    public function index()
    {
        return view('home');
    }
}

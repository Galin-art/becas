<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function mediasuperior(){
        return view('alumnos.mediaSuperior');
    }


    public function superior(){
        return view('alumnos.superior');
    }
}

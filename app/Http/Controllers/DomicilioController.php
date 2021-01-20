<?php

namespace App\Http\Controllers;

use App\Imports\DomicilioImport;
use App\Models\Domicilio;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilio $domicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(Domicilio $domicilio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domicilio $domicilio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domicilio $domicilio)
    {
        //
    }


    public function import6(Request $request)
    {
//        return $request;
        $file = $request->file('file');
        Excel::import(new DomicilioImport(), $file);




//        return back()->with('message', 'Importanción de integrantes completada');
        return redirect('/importar')->with('success', 'importacion completa!');


    }


}

<?php

namespace App\Http\Controllers;

use App\Imports\LocalidadImport;
use App\Models\Localidad;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LocalidadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


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
     * @param  \App\Models\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function show(Localidad $localidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Localidad $localidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localidad $localidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localidad  $localidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localidad $localidad)
    {
        //
    }






    public function import2(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new LocalidadImport, $file);





//        return back()->with('message', 'Importanción de municipios completada');
        return redirect('/importar')->with('success', 'importacion  de localidades completa!');




    }








}

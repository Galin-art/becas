<?php

namespace App\Http\Controllers;

use App\Imports\TransferenciaImport;
use App\Models\Transferencia;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TransferenciasController extends Controller
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
     * @param  \App\Models\Transferencia  $transferencias
     * @return \Illuminate\Http\Response
     */
    public function show(Transferencia $transferencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transferencia  $transferencias
     * @return \Illuminate\Http\Response
     */
    public function edit(Transferencia $transferencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transferencia  $transferencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transferencia $transferencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transferencia  $transferencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transferencia $transferencias)
    {
        //
    }


    public function import7(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new TransferenciaImport(), $file);




//        return back()->with('message', 'Importanción de Regiones completada');
        return redirect('/importar')->with('success', 'importacion de tranferencias completa!');

    }


}

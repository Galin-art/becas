<?php

namespace App\Http\Controllers;

use App\Imports\RegionesImport;
use App\Models\Beneficiario;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RegionController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }


    //regiones

    public function region()
    {

        $datoUsuario = Auth::user()->getAttribute('region_id');


//        $filtrados1= Region::with('municipios.localidades.beneficiarios')->where('id','=',$datoUsuario)->paginate();

        $filtrados1 = Region::join('municipios', 'regiones.id', '=', 'municipios.region_id')
            ->join('localidades', 'municipios.id', '=', 'localidades.municipio_id')->
            join('beneficiarios', 'localidades.id', '=', 'beneficiarios.localidad_id')
            ->where('regiones.id', '=', $datoUsuario)
            ->get();


//        return $filtrados1;
        return view('regiones.usuarioRegion', compact('filtrados1'));
    }


    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new RegionesImport, $file);




//        return back()->with('message', 'Importanción de Regiones completada');
        return redirect('/importar')->with('success', 'importacion completa!');

    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Beneficiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeneficiarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin',['only'=>'index']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaBene= Beneficiario::with('localidad.municipio.region',)->simplePaginate(50);

//        $prueba=Auth::user();
//        $cosulta= Beneficiario::with('localidad.municipio.region')->where($prueba==region_id);


//        return $listaBene;
        return view('Beneficiarios.lista',compact('listaBene'));
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
     * @param  \App\Models\Beneficiario  $beneficiario
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
       $getCurp = $request->get('curp');
       $getFamiid= $request->get('famid');

        $listaBene= Beneficiario::orderBy('id', 'ASC')
            ->Curp($getCurp)
            ->Familai($getFamiid)
            ->paginate(5);


        return view('Beneficiarios.lista',compact('listaBene'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beneficiario  $beneficiario
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficiario $beneficiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beneficiario  $beneficiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficiario $beneficiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beneficiario  $beneficiario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiario $beneficiario)
    {
        //
    }

    public function detalles($id){

//        $informacion = Beneficiario::find($id);
//return $informacion;
        $informacion= Beneficiario::with('transferencias.bimestre')->find($id);
        $infoC = Beneficiario::with('localidad.municipio.region')->find($id);

//  return $informacion;
//        return $infoC;

        return view('Beneficiarios.detalles',compact('informacion','infoC'));


    }








//{{$infoC}}
//@foreach($informacion->transferencias as $transf)
//{{$transf->monto}}
//       @endforeach

















}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listaUser=User::all();
//        return  $listaUser;
        return view('usuarios.crear',compact('listaUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.crear');
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
        User::create([
           'name'=>request('name'),
            'email'=>request('email'),
            'tipo'=>request('tipo'),
            'region_id'=>request('region_id'),
            'password'=>bcrypt(\request('password')),
        ]);
       return redirect()->route('lista.Usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
//        $userD=User::all()->find($id);
//        return $userD;
//    return $user;
        return view('usuarios.actualizar',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user )
    {
        //


//    return $request;


        $user->name=request('name');
        $user->email=request('email');
        $user->tipo=request('tipo');
        $user->region_id=request('region_id');
        $user->password=bcrypt(\request('password'));


$user->save();

        return redirect()->route('lista.Usuario');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user )
    {
        //
    $user->delete();
        return redirect()->route('lista.Usuario');

    }

    public function importar(){
        return view('importar.import');
    }
}

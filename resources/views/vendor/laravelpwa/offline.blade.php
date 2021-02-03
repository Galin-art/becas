@extends('layouts.app')

@section('content')

   <p>Hola Usuario actualmente el sistema no cuenta con conexion a internet </p>

<br>

    <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('lista.beneficiario')}}">offline</a>
    </button>
    
    <img src="img/offline.png">


@endsection

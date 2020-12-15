@extends('layouts.app')
@section('navegacion')
    @include('ui.adminnav')

@endsection
{{--@section('navegacion1')--}}
{{--    @include('ui.nave2')--}}

{{--@endsection--}}

@section('content')















    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 class="text-2xl text-center mt-10"><a>BIENVENIDO </a></h1>
                            <div class="text-center text-5xl font-extrabold leading-none tracking-tight">
  <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">
    Bienvenido
  </span>
                            </div>
                        <br>
                        <img  class="h-25 w-full"  src="/img/1.jpg">






                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

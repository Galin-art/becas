
@extends('layouts.app')
@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10"><a>{{$informacion->nombre}}{{ ' ' }}{{$informacion->paterno}}{{ ' ' }}{{$informacion->materno}}</a></h1>


    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="md:w-1/2">



           <br>



                <!--
                  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
                  Read the documentation to get started: https://tailwindui.com/documentation
                -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">

                            Informacion del beneficiario
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                            Datos personales
                        </p>
                    </div>
                    <div>
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Nombre Completo
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">

                                    <span class="font-normal"> {{$informacion->nombre}}{{ ' ' }}{{$informacion->paterno}}{{ ' ' }}{{$informacion->materno }} </span><BR>


                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    CURP
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal"> {{$informacion->curp}} </span>
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Folio
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal"> {{$informacion->folio}} </span>
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Familia id
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal"> {{$informacion->famid}} </span>
                                </dd>
                            </div>


                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Region
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal"> {{


                                $informacion->colonia->localidad->municipio->region->region}} </span>
                                </dd>
                            </div>


                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Municipio
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal"> {{$informacion->colonia->localidad->municipio->municipio}} </span></dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Localidad
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">  </span>
                                    <span class="font-normal"> {{$informacion->colonia->localidad->localidad}} </span>
                                </dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Colonia
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">  </span>
                                    <span class="font-normal"> {{$informacion->colonia->nom_col}} </span>
                                </dd>
                            </div>




                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    poner lo que es ubiacasion entre calle y valle
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">  </span>
                                    <span class="font-normal"> {{$informacion->colonia->nom_col}} </span>
                                </dd>
                            </div>












                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Referencias
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                   descripcion de  donde mas omenos se encuentra ubicado la persona
                                    </dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    tarjeta
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <a href="">
                                    <button class="bg-teal-600 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                                        <span>ver informacion de la tarjeta</span>
                                    </button>



                                    </a>
                                </dd>
                            </div>

                        </dl>
                    </div>
                </div>











            </div>
            <div class="md:w-1/2">
                <BR>

                <h1 class="text-2xl text-center mt-10"><a>PAGOS O MONTOS</a></h1>

                <div class="mt-10 mb-20 md:flex items-start">
                    <br>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>


                    <!--
                      Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
                      Read the documentation to get started: https://tailwindui.com/documentation
                    -->
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">

                                Informacion de monto
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                                Datos personales
                            </p>
                        </div>
                        <div>
                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm leading-5 font-medium text-gray-500">
                                        monto
                                    </dt>
                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">

                                        ??????????

                                    </dd>
                                </div>

















                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm leading-5 font-medium text-gray-500">
                                        Referencias
                                    </dt>
                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                        descripcion de  donde mas omenos se encuentra ubicado la persona
                                    </dd>
                                </div>

                            </dl>
                        </div>
                    </div>




                </div>











            </div>

        </div>

    </div>



@endsection

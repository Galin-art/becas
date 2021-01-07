@extends('layouts.app')
@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')



    <h1 class="text-2xl text-center mt-10">
        <a>
            @if($infoC)

                {{$infoC->nombre}}
            @else
                no hay  nombre  por mostrar
            @endif



            {{ ' ' }}
                @if($infoC)

                {{$infoC->paterno}}
            @else
                no hay  nombre  por mostrar
            @endif


            {{ ' ' }}
 @if($infoC)

                {{$infoC->materno}}
            @else
                no hay  nombre  por mostrar
            @endif



        </a>
    </h1>

    <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('lista.beneficiario')}}">volver</a>
    </button>


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

                                    <span
                                        class="font-normal">
                                     <a>
                                          @if($infoC)
                                             {{$informacion->nombre}}
                                         @else
                                             no hay  nombre  por mostrar
                                         @endif
                                         {{ ' ' }}
                                              @if($infoC)
                                             {{$informacion->paterno}}
                                         @else
                                             no hay  bimestre por mostrar
                                         @endif
                                         {{ ' ' }}
                                              @if($infoC)
                                             {{$informacion->materno}}
                                         @else
                                             @endif
                                    </a>

                                    </span><BR>


                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    CURP
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">

                                        @if($infoC)
                                            {{$informacion->curp}}
                                        @else
                                            no hay  Curp por mostrar
                                        @endif
                                    </span>
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Folio
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">

                                        @if($infoC)
                                            {{$informacion->folio}}
                                        @else
                                            no hay  folio por mostrar
                                        @endif
                                    </span>
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Familia id
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">

                                        @if($infoC)
                                            {{$informacion->famid}}
                                        @else
                                            no hay  bimestre por mostrar
                                        @endif
                                    </span>
                                </dd>
                            </div>


                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Region
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">

                                        @if($infoC==null)
                                            no hay  region por mostrar
                                        @else

                                            {{$infoC->localidad->municipio->region->region}}
                                        @endif

                                    </span>
                                </dd>
                            </div>


                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Municipio
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">
                                        @if($infoC)
                                            {{$infoC->localidad->municipio->municipio}}
                                        @else
                                            no hay  municipio por mostrar
                                        @endif

                                    </span>
                                </dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Localidad
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span class="font-normal">  </span>
                                    <span class="font-normal">

                                        @if($infoC)
                                            {{$infoC->localidad->localidad}}
                                        @else
                                            no hay  bimestre por mostrar
                                        @endif
                                    </span>
                                </dd>
                            </div>


                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Referencias
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    descripcion de donde mas omenos se encuentra ubicado la persona
                                </dd>
                            </div>


                        </dl>
                    </div>
                </div>


            </div>
            <div class="md:w-1/2">
                <BR>

{{--                <h1 class="text-2xl text-center mt-10"><a>PAGOS O MONTOS</a></h1>--}}

                <div class="mt-10 mb-20 md:flex items-start">
                    <br>
                    <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>


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

<BR>
















                        <!-- Collapsible card by Julian Rachele -->
                        <div class="shadow-md bg-gray-800 text-gray-200 m-8 p-6 rounded" x-data="{open: false}">
                            <div class="flex items-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                                <p>montos y bimestres </p>
                                <!-- Button for opening card -->
                                <div class="ml-4">
                                    <div @click="open = !open;" class="flex items-center cursor-pointer px-3 py-2 text-gray-200 hover:text-gray-600" :class="{'transform rotate-180': open}">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Collapsed content -->
                            <div class="w-full flex flex-col mt-8" :class="{'hidden': !open}">
                                <table class="border-collapse w-full">
                                    <thead>
                                    <tr>
                                        <th class="p-3 font-bold uppercase bg-gray-200 text-white border border-gray-300 hidden lg:table-cell bg-teal-700">MONTO</th>
                                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell bg-green-400">CANAL</th>
                                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell bg-green-400">BIMESTRE</th>
                                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell bg-green-400">MODALIDAD</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($informacion->transferencias as $transf)
                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static transition duration-500 ease-in-out bg-blue-600 hover:bg-red-600">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">MONTO</span>
                                                {{"$ ".$transf->monto}}</a>
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">CANAL</span>
                                                {{$transf->canal}}
                                            </td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">BIMESTRE</span>
                                                {{$transf->bimestre->bimestre." del ".$transf->año}}
                                            </td>

                                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">MODALIDAD</span>
                                                <br>
                                                {{$transf->modalidad}}
                                            </td>


                                        </tr>
                                    @empty

                                    @endforelse

                                    </tbody>
                                </table>

                            </div>
                        </div>























                        <div>
                            <dl>
{{--                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">--}}
{{--                                    <dt class="text-sm leading-5 font-medium text-gray-500">--}}
{{--                                        Año--}}
{{--                                    </dt>--}}
{{--                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">--}}
{{--                                        <span class="font-normal">--}}

{{--                                            @foreach($informacion->transferencias as $transf)--}}
{{--                                                {{$transf->año}}--}}
{{--                                            @endforeach--}}

{{--                                        </span>--}}
{{--                                    </dd>--}}
{{--                                </div>--}}
{{--                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">--}}
{{--                                    <dt class="text-sm leading-5 font-medium text-gray-500">--}}
{{--                                        Bimestre--}}
{{--                                    </dt>--}}
{{--                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">--}}
{{--                                        <span class="font-normal">--}}

{{--                                            @foreach($informacion->transferencias as $transf)--}}
{{--                                                {{$transf->bimestre->bimestre}}--}}
{{--                                            @endforeach--}}


{{--                                        </span></dd>--}}
{{--                                </div>--}}


{{--                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">--}}
{{--                                    <dt class="text-sm leading-5 font-medium text-gray-500">--}}
{{--                                        canal--}}
{{--                                    </dt>--}}
{{--                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">--}}
{{--                                        <span class="font-normal">--}}
{{--                                        @foreach($informacion->transferencias as $transf)--}}
{{--                                                {{$transf->canal}}--}}
{{--                                            @endforeach--}}
{{--                                         </span></dd>--}}
{{--                                </div>--}}


                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm leading-5 font-medium text-gray-500">
                                        Tipo Canal
                                    </dt>
                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                        <span class="font-normal">
                                        @foreach($informacion->transferencias as $transf)

                                                {{$transf->tipoCanal." / "}}
                                            @endforeach </span>
                                    </dd>
                                </div>
{{--                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">--}}
{{--                                    <dt class="text-sm leading-5 font-medium text-gray-500">--}}
{{--                                        Modalidad--}}
{{--                                    </dt>--}}
{{--                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">--}}
{{--                                        <span class="font-normal">--}}
{{--                                             @foreach($informacion->transferencias as $transf)--}}
{{--                                                {{$transf->modalidad}}--}}
{{--                                            @endforeach </span>--}}
{{--                                        </span>--}}
{{--                                    </dd>--}}
{{--                                </div>--}}
{{--                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">--}}
{{--                                    <dt class="text-sm leading-5 font-medium text-gray-500">--}}
{{--                                        Monto--}}
{{--                                    </dt>--}}
{{--                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">--}}
{{--                                        <h2></h2><span--}}
{{--                                            class="font-normal  text-pink-800 text-lg bg-clip-content p-4 bg-indigo-300 border-4 border-indigo-300 border-dashed">--}}
{{--                                        @foreach($informacion->transferencias as $transf)--}}
{{--                                                {{$transf->monto}}--}}
{{--                                            @endforeach </span>--}}

{{--                                    </dd>--}}
{{--                                </div>--}}

                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm leading-5 font-medium text-gray-500">
                                        tarjeta
                                    </dt>
                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                        <a href="{{route('tajetas.persona')}}">
                                            <button
                                                class="bg-teal-600 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                                </svg>
                                                <span>ver informacion de la tarjeta</span>
                                            </button>


                                        </a>
                                    </dd>
                                </div>


                            </dl>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
<br>
    <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('lista.beneficiario')}}">volver</a>
    </button>

@endsection

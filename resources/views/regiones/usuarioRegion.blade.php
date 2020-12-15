@extends('layouts.app')
@section('navegacion')

    @include('ui.adminnav')

@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">
        {{$filtrados1[0]->region}}
    </h1>

    @include('ui.buscador')





    <h1 class="text-2xl text-center mt-10">Lista de beneficiarios</h1>


    <div class="flex flex-col mt-10">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-56">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">


                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">NOMBRE</th>
                        <th class="px-4 py-2">APELLIDO PATERNO</th>
                        <th class="px-4 py-2">APELLIDO MATERNO</th>
                        <th class="px-4 py-2">CURP</th>

                        <th class="px-4 py-2">FAMID</th>

                        <th class="px-4 py-2">ACCIONES</th>


                    </tr>

                    </thead>
                    @foreach($filtrados1 as  $hua)

                        <tr class="bg-gray-100">

                            <td class="border px-4 py-2"><a
                                    href="{{route('BeneficiarioInformacion', $hua)}}"> {{$hua->nombre}}</a></td>
                            <td class="border px-4 py-2"><a
                                    href="{{route('BeneficiarioInformacion', $hua)}}"> {{$hua->paterno}}</a></td>
                            <td class="border px-4 py-2"><a
                                    href="{{route('BeneficiarioInformacion', $hua)}}"> {{$hua->materno}}</a></td>
                            <td class="border px-4 py-2"><a
                                    href="{{route('BeneficiarioInformacion', $hua)}}"> {{$hua->curp}}</a></td>
                            <td class="border px-4 py-2"><a
                                    href="{{route('BeneficiarioInformacion', $hua)}}"> {{$hua->famid}}</a></td>


                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium  ">
                                <a href="{{route('BeneficiarioInformacion', $hua)}}">
                                    <button
                                        class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <span>Ver</span>
                                    </button>
                                </a>
                            </td>


                        </tr>

                        {{--                                            <li><a href="{{route('Beneficiario.show', $lis)}}">{{$lis->nombre}}</a></li>--}}


                    @endforeach


                </table>


                <br>





@endsection


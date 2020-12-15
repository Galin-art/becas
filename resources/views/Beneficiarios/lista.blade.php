@extends('layouts.app')
@section('navegacion')

    @include('ui.nave2')

@endsection

@section('content')


    @include('ui.buscador')





    <h1 class="text-2xl text-center mt-10">Lista de beneficiarios</h1>

<BR>
                <table class="border-collapse w-full">
                    <thead>


                    <tr>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">NOMBRE</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">APELLIDO PATERNO</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">APELLIDO MATERNO</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">CURP</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">FAMID</th>
                        <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ACCIONES</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($listaBene as $lis)


                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">NOMBRE</span>
                            <a
                                href="{{route('BeneficiarioInformacion', $lis)}}">{{$lis->nombre}}</a>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">APELLIDO PATERNO</span>
                            <a
                                href="{{route('BeneficiarioInformacion', $lis)}}"> {{$lis->paterno}}</a>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">APELLIDO MATERNO</span>
                            <a
                                href="{{route('BeneficiarioInformacion', $lis)}}"> {{$lis->materno}}</a>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">CURP</span>
                            <a
                                href="{{route('BeneficiarioInformacion', $lis)}}"> {{$lis->curp}}</a>
                        </td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">FAMID</span>
                            <a
                                href="{{route('BeneficiarioInformacion', $lis)}}"> {{$lis->famid}}</a>



                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                            <a href="{{route('BeneficiarioInformacion', $lis)}}">

                                <button


                                    class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">

                                    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
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


                    @empty

                    @endforelse

                    </tbody>
                </table>



                <br>
    {{$listaBene->links() }}




@endsection

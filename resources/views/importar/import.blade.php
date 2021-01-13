@extends('layouts.app')
@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    @include('sweetalert::alert')

    <!-- This is an example component -->
    <div>
        <section class=" text-gray-200 bg-gray-900">
            <div class="max-w-6xl mx-auto px-5 py-24 ">
                <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                    <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl"> Agregar y Actualizar</h1>
                    <p class="lg:w-1/2 w-full leading-relaxed text-base">
                        inserta las tablas en cada seccion donde corresponde.
                    </p>
                </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>



{{--                @if(Session::has('message'))--}}
{{--                    <p>{{ Session::get('message') }}</p>--}}
{{--                    <br>--}}
{{--                @endif--}}

                @if (session('success_message'))
                    {{session('success_message')}}

                @endif





{{--                                @if(Session::has('message'))--}}

{{--                                    <br>--}}
{{--                                    <script>--}}
{{--                                        swal("LISTO","{!! Session::get('message') !!}")--}}
{{--                                        button:"Cerrar";--}}

{{--                                    </script>--}}

{{--                                @endif--}}










                <div class="flex flex-wrap -m-4">


                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">Importar Regiones </h2>
                            <br>


                            <form action="{{route('region.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

{{--                                @if(Session::has('message'))--}}
{{--                                    <p>{{ Session::get('message') }}</p>--}}
{{--                                    <br>--}}
{{--                                @endif--}}
                                <br>

                                <input type="file" name="file">

{{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                           </form>


                        </div>
                    </div>










                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">Importar municipios </h2>
                            <br>


                            <form action="{{route('municipio.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                @if(Session::has('message'))
                                    <p>{{ Session::get('message') }}</p>
                                    <br>
                                @endif
                                <br>

                                <input type="file" name="file">

                                {{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>





















                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">Localidad </h2>
                            <br>


                            <form action="{{route('localidad.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

{{--                                @if(Session::has('message'))--}}
{{--                                    <p>{{ Session::get('message') }}</p>--}}
{{--                                    <br>--}}
{{--                                @endif--}}
                                <br>

                                <input type="file" name="file">

                                {{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>











                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">Familias </h2>
                            <br>


                            <form action="{{route('benefeciario.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

{{--                                @if(Session::has('message'))--}}

{{--                                    <p>{{ Session::get('message') }}</p>--}}
{{--                                    <br>--}}
{{--                                @endif--}}
                                <br>

                                <input type="file" name="file">

                                {{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>


















                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">Bintess</h2>
                            <br>


                            <form action="{{route('integrantes.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

{{--                                @if(Session::has('message'))--}}
{{--                                    <p>{{ Session::get('message') }}</p>--}}
{{--                                    <br>--}}
{{--                                @endif--}}
                                <br>

                                <input type="file" name="file">

                                {{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>
























                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">transferencias </h2>
                            <br>


                            <form action="{{route('municipio.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

{{--                                @if(Session::has('message'))--}}
{{--                                    <p>{{ Session::get('message') }}</p>--}}
{{--                                    <br>--}}
{{--                                @endif--}}
                                <br>

                                <input type="file" name="file">

                                {{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>












                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-2">integrantesss </h2>
                            <br>


                            <form action="{{route('integrantes.import.exel')}}" method="post" enctype="multipart/form-data">
                                @csrf

{{--                                @if(Session::has('message'))--}}
{{--                                    <p>{{ Session::get('message') }}</p>--}}
{{--                                    <br>--}}
{{--                                @endif--}}
                                <br>

                                <input type="file" name="file">

                                {{--                                <button>Importar Usuarios</button>--}}

                                <div class="m-3 flex justify-end">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center flex justify-end">
                                        <span class="mr-2">Send</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                                        </svg>
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>





















                </div>
            </div>
        </section>

    </div>





@endsection

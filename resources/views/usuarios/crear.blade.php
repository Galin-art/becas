@extends('layouts.app')
@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')

    <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('lista.beneficiario')}}">volver</a>
    </button>



    <div class="w-full flex justify-center my-0.5 py-6">
        <div class="w-3/4">
            <div class="w-full flex flex-col md:flex-row rounded overflow-hidden shadow-xl">

                <div class="w-full md:w-1/4 h-auto">
                    <div class="top flex items-center px-5 h-16 bg-gray-700 text-white">
                        <div class="ml-3 flex flex-col text-xl">
                            ADMIN
                        </div>
                    </div>
                    <div class="bg-gray-400 w-full h-full sm:flex md:block">
                        <button id="button-1" onclick="showView(1)"
                                class="w-full flex justify-between items-center px-5 py-2 hover:bg-gray-500 cursor-pointer focus:outline-none">
                            <span><i class="fa fa-inbox w-6"></i>Agregar Usuario</span>
                        </button>


                        <button id="button-4" onclick="showView(4)"
                                class="w-full flex justify-between items-center px-5 py-2 hover:bg-gray-500 cursor-pointer focus:outline-none">
                            <span><i class="fa fa-trash w-6"></i>Lista de Usuarios</span>
                            {{--                        <span class="text-xs bg-gray-800 px-1 rounded text-white">4</span>--}}
                        </button>
                    </div>
                </div>


                <div class="w-full md:w-3/4">
                    <div class="top flex items-center px-5 h-16 bg-gray-600 text-white text-2xl">
                        <div id="title-1" class="hidden">
                            Crear Usuarios
                        </div>


                        <div id="title-4" class="hidden">
                            lista de usuarios registrados
                        </div>
                    </div>
                    <div class="w-full px-5 py-3 max-h-screen overflow-y-auto">
                        <div id="view-1" class="hidden">
                            {{--                        agregar usuario--}}

                            {{--                        en esta parte va el formulario del  dar de alta a los usuarios--}}
                            <div class="flex items-center justify-center">
                                <div class="w-full max-w-md">

                                    <br>

                                    <form method="post" action="{{route('users.store')}}">
                                        @csrf
                                        <label class="block text-base text-black">
                                            Nombre usuario<br>
                                            <input title="text" name="name"
                                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </label>
                                        <br>

                                        <label class="block text-base text-black">
                                            Email del usuario<br>
                                            <input title="text" name="email"
                                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </label>

                                        <br>


                                        <div class="w-full ">
                                            {!! Form::label('tipo', 'Tipo de usuario') !!}
                                            {!! Form::select('tipo',[''=>'selecciona un previlegio','1'=>'Administrador','0'=>'Usuario']) !!}

                                        </div>


                                        <br>

{{--                                        <label class="block text-base text-black">--}}
{{--                                            Region id<br>--}}
{{--                                            <input title="text" name="region_id"--}}
{{--                                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
{{--                                        </label>--}}

                                        <div class="w-full ">
                                            {!! Form::label('region_id', 'region') !!}
                                            {!! Form::select('region_id',[''=>'selecciona una region',
                                                    '200'=>'TODAS',
                                                    '20001'=>'CIUDAD IXTEPEC',
                                                    '20002'=>'HEROICA CIUDAD DE HUAJUAPAN DE LEON',
                                                    '20003'=>'HEROICA CIUDAD DE JUCHITAN DE ZARAGOZA',
                                                    '20004'=>'HEROICA CIUDAD DE TLAXIACO',
                                                    '20005'=>'HUAUTLA DE JIMENEZ',
                                                    '20006'=>'IXTLAN DE JUAREZ',
                                                    '20007'=>'MIAHUATLAN DE PORFIRIO DIAZ',
                                                    '20008'=>'OAXACA DE JUAREZ',
                                                    '20009'=>'SALINA CRUZ',
                                                    '200010'=>'SAN JUAN BAUTISTA TUXTEPEC',
                                                    '200011'=>'SAN PEDRO MIXTEPEC',
                                                    '200012'=>'SANTIAGO PINOTEPA NACIONAL',
                                                    '200013'=>'SANTO DOMINGO TEHUANTEPEC',
                                                    '200015'=>'TEOTITLAN DE FLORES MAGON',
                                                    '200015'=>'TLACOLULA DE MATAMOROS']) !!}

                                        </div>




                                        <br>

                                        <label class="block text-base text-black">
                                            Password<br>
                                            <input type="password" name="password"
                                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </label>
                                        <br>
                                        <br>



                                        <button


                                            class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                                            <span>Guardar</span>

                                        </button>


                                    </form>
                                </div>
                            </div>


                        </div>


                        <div id="view-4" class="hidden">

                            {{--                        <hr class="my-2 border-gray-500">--}}
                            {{--                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ratione minima praesentium, unde maxime nisi maiores temporibus fugit!--}}
                            {{--                        Ducimus aliquam commodi autem minima repudiandae dolorum aut sit dolorem laudantium odit.--}}
                            {{--                    --}}
                            <table class="border-collapse w-full">
                                <thead>


                                <tr>
                                    <th class="p-3 font-bold uppercase bg-teal-700 text-white border border-gray-300 hidden lg:table-cell">
                                        NOMBRE
                                    </th>
                                    <th class="p-3 font-bold uppercase bg-teal-700 text-white border border-gray-300 hidden lg:table-cell">
                                        EMAIL
                                    </th>
                                    <th class="p-3 font-bold uppercase bg-teal-700 text-white border border-gray-300 hidden lg:table-cell">
                                        REGION
                                    </th>
                                    <th class="p-3 font-bold uppercase bg-teal-700 text-white border border-gray-300 hidden lg:table-cell">
                                        ACCIONES
                                    </th>

                                </thead>

                                <tbody>
                                @forelse($listaUser as $userss)


                                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">NOMBRE</span>

                                            {{$userss->name}}
                                        </td>
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">email</span><br/>

                                            {{$userss->email}}
                                        </td>
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">id region</span>
                                            {{$userss->region_id}}
                                        </td>
                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">id region</span>



                                            <button
                                                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
                                            >
                                                <a href="{{route('Usuario.edit',$userss)}}">editar</a>
                                            </button>

                                            <br>
                                            <br>


                                            <form method="POST" action="{{route('Usuario.distroy',$userss)}}">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-600 rounded-full shadow ripple hover:shadow-lg hover:bg-red-500 focus:outline-none"
                                                >
                                                    <a>Eliminar</a>
                                                </button>

                                            </form>


                                        </td>


                                    </tr>


                                @empty

                                @endforelse

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var activeClasses = ["bg-gray-500", "border-l-4", "pl-4", "border-gray-700"];
        var lastId = null;
        showView(1)

        function showView(id) {
            if (id == null) return
            closeLast()
            document.getElementById('view-' + id).style.display = "block"
            document.getElementById('title-' + id).style.display = "block"
            document.getElementById('button-' + id).classList.add(...activeClasses)

            lastId = id;
        }

        function closeLast() {
            if (lastId == null) return

            document.getElementById('view-' + lastId).style.display = "none"
            document.getElementById('title-' + lastId).style.display = "none"
            document.getElementById('button-' + lastId).classList.remove(...activeClasses)
        }

        /*
            //If you want to use your own identifiers replace js code

            var views = ['view-1','view-2','view-3','view-4']
            var titles = ['title-1','title-2','title-3','title-4']
            var buttons = ['button-1','button-2','button-3','button-4']
            var activeClasses = ["bg-gray-500","border-l-4","pl-4","border-gray-700"];
            close()
            showView(1)

            function showView(buttonId) {
                "use strict";

                close()
                document.getElementById(views[buttonId-1]).style.display = "block"
                document.getElementById(titles[buttonId-1]).style.display = "block"

                document.getElementById(buttons[buttonId -1]).classList.add(...activeClasses)
            }
            function close() {
                "use strict";

                views.forEach(view => {
                    document.getElementById(view).style.display = "none"
                });
                titles.forEach(title => {
                    document.getElementById(title).style.display = "none"
                });
                buttons.forEach(button => {
                    document.getElementById(button).classList.remove(...activeClasses)
                });
            }
        */
    </script>



@endsection

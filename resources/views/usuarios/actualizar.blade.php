@extends('layouts.app')
@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')



<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">Actualizar {{$user->name}}</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">formulario de actualizacion de usuarios.</p>
                    </div>
                </div>


                <form method="post" action="{{route('Usuario.update',$user)}}">
                    @csrf
                    @method('PATCH')
                    <label class="block text-base text-black">
                        Nombre usuario<br>
                        <input title="text" name="name" value="{{$user->name}}"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </label>
                    <br>


                    <label class="block text-base text-black">
                        Email del usuario<br>
                        <input title="text" name="email" value="{{$user->email}}"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </label>

                    <br>


                    <div class="w-full ">
                        {!! Form::label('tipo', 'Tipo de usuario') !!}
                        {!! Form::select('tipo',[''=>'selecciona un previlegio','1'=>'Administrador','0'=>'Usuario']) !!}

                    </div>


                    <br>

                    <label class="block text-base text-black">
                        Region id<br>
                        <input title="text" name="region_id" value="{{$user->region_id}}"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </label>
                    <br>

                    <label class="block text-base text-black">
                        Password<br>
                        <input type="password" name="password" value=""
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </label>
                    <br>
                    <br>



                    <button


                        class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                        <span>Actualizar</span>

                    </button>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection

esto es la tarjeta

@extends('layouts.app')
@section('navegacion')

    @include('ui.adminnav')

@endsection

@section('content')

    <!-- component -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/node-waves@0.7.6/dist/waves.min.css" />


        <div class="m-6 space-x-3 space-y-3">
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none"
            >
                Primary
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-pink-500 rounded-full shadow ripple hover:shadow-lg hover:bg-pink-600 focus:outline-none"
            >
                Secondary
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
            >
                Success
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-500 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"
            >
                Danger
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-yellow-500 rounded-full shadow ripple hover:shadow-lg hover:bg-yellow-600 focus:outline-none"
            >
                Warning
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-indigo-500 rounded-full shadow ripple hover:shadow-lg hover:bg-indigo-600 focus:outline-none"
            >
                Info
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-gray-100 rounded-full shadow ripple hover:shadow-lg hover:bg-gray-200 focus:outline-none"
            >
                Light
            </button>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-black rounded-full shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black"
            >
                Dark
            </button>
        </div>




    </div>



@endsection

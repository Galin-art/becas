<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        @laravelPWA
    </head>



    <body class="bg-gray-200 min-h-screen leading-none{{--esto es interlineas--}}" >
    <div id="app">
        <nav class="bg-green-900 shadow-md py-2{{--esto de la el tamaño en paralelo--}} " >
            <div class="container mx-auto md:px-0 {{--esto es el margen--}}">
                <div class="flex items-center justify-around"></div>

                <a class="text-2xl text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>


                <nav class="flex-1 text-right{{--esto esto coloca el texto en el dado derecho --}}" >



                    @guest
                        <a class="text-white{{--color blanco de las letras--}} no-underline hover:text-gray-300 p-3" href="{{ route('login') }}">{{ __('Login') }}</a>

{{--                        @if (Route::has('register'))--}}

{{--                            <a class="text-white--}}{{--color blanco de las letras--}}{{-- no-underline hover:text-gray-300 p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}

{{--                        @endif--}}
                    @else

                        {{--                          <span class="text-right text-sm pr-4">  {{ Auth::user()->name }}</span>  esto le da color al nombre del login --}}
                        <span class="text-gray-300 text-sm pr-4"> {{ Auth::user()->name }}  </span>



                        {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                        <a class="no-underline hover:no-underline text-gray-300 text-smr p-3" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest

                </nav>
            </div>
        </nav>


        <div class="bg-gray-700">
            <nav class="container mx-auto flex flex-col text-center md:flex-row  space-x-1">
                @yield('navegacion')
            </nav>
        </div>
        <div class="bg-gray-700">
            <nav class="container mx-auto flex flex-col text-center md:flex-row  space-x-1">

                @yield('navegacion1')
            </nav>
        </div>

        <main class="mt-10 container mx-auto">
            @yield('content')
        </main>
    </div>
    </body>
</html>

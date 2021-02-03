@extends('layouts.app')

@section('content')

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button
                        type="submit"
                        class="bg-teal-500{{--colr fondo--}}
                            w-full{{--el boton tome el espacio disponible--}}
                            hover:bg-teal-700
                            text-gray-100 {{--color de texto--}}
                            p-3
                            focus:outline-none {{--paque no se ponga decolor azul--}}
                            focus:shadow-outline
                            uppercase {{--para que el texto sea en mayusculas--}}
                            font-bold">{{--para que el texto sea en negritas--}}

                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>

@endsection

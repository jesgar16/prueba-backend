@extends('layouts.app', ['title' => 'Registrarse'])
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
            <h3 class="text-2xl font-bold text-center">Registro</h3>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="mt-4">
                    <div>
                        <label class="block" for="name">Nombre<label>
                        <input type="text" name="name" placeholder="Ingrese un nombre"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mt-4">
                        <label class="block" for="email">Correo Electrónico<label>
                        <input type="text" name="email"  placeholder="Ingrese su correo electrónico"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mt-4">
                        <label class="block">Contraseña<label>
                        <input type="password" name="password"  placeholder="Ingrese una contraseña"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mt-4">
                        <label class="block">Confirmar Contraseña<label>
                        <input type="password" name="password_confirmation" placeholder="Confirme su contraseña"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    {{-- <span class="text-xs text-red-400">Password must be same!</span> --}}
                    <div class="flex">
                        <button class="w-full px-6 py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-blue-900" type="submit">Crear
                            cuenta</button>
                    </div>
                    <div class="mt-6 text-grey-dark">
                        Ya tengo una cuenta.
                        <a class="text-indigo-600 hover:underline" href="{{ route('login.show') }}">
                            Ingresar
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

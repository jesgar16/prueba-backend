@extends('layouts.app', ['title' => 'Ingresar'])
@section('content')
    <div class="h-screen bg-gray-50 flex items-center justify-center">
        <div class="w-full max-w-lg bg-white shadow-lg rounded-md p-8 space-y-4">
            <h1 class="text-xl font-semibold">Ingresar</h1>
            <form method="post" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div class="space-y-1">
                    <label for="email" class="block">Correo electrónico</label>
                    <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico"
                        class="block w-full border-gray-400 rounded-md px-4 py-2" />
                    @if ($errors->has('email'))
                        <span class="text-sm text-red-600">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="space-y-1">
                    <label for="password" class="block">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="*******"
                        class="block w-full border-gray-400 rounded-md px-4 py-2" />
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="flex items-baseline justify-between">
                    <button class="rounded-md px-4 py-2 bg-indigo-600 text-white hover:bg-blue-900" type="submit">Entrar</button>
                    <a href="{{ route('register.show') }}" class="text-sm text-indigo-600 hover:underline">Aún no tengo
                        cuenta</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
    @if (Route::has('login'))
        @auth
            @include('awards.index', ['awards'])
        @else
            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Ingresar</a>
                                </div>
                            </div>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-4 sm:items-center">
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    @endif
@endsection

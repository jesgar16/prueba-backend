<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Premiados') }}</title>
</head>

<body>
    <div class="container">
        <div class="flex">
            <div class="flex w-2/5 md:w-1/4 h-screen bg-white">
                <div class="mx-auto py-10">
                    <h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">Peoples Awards</h1>
                    <ul>
                        <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="font-semibold">
                                <a href="{{ url('/') }}" class="">Premios</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- End Menu --}}
            <main class=" min-h-screen w-full">
                <nav class="flex justify-end px-10 bg-white py-6">

                    <div class="flex items-end">
                        <a href="{{ url('/logout') }}" class="text-sm text-gray-700  hover:text-red-600">Cerrar
                            sesión</a>
                    </div>
                </nav>
                <div class="w-11/12">
                    {{-- Awards content --}}
                    <div class="overflow-x-auto bg-white rounded-lg">
                        <table
                            class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                            <thead>
                                <tr class="text-left">
                                    <th
                                        class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                                        Nombre del ganador
                                    </th>
                                    <th
                                        class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                                        Premio recibido
                                    </th>
                                    <th
                                        class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                                        Correo electrónico
                                    </th>
                                    <th
                                        class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                                        Teléfono
                                    </th>
                                    <th
                                        class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                                        Dirección
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($awards as $award)
                                    <tr>
                                        <td class="border-dashed border-t border-gray-200 userId">
                                            <span
                                                class="text-gray-700 px-6 py-3 flex items-center">{{ $award->name }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 firstName">
                                            <span
                                                class="text-gray-700 px-6 py-3 flex items-center">{{ $award->award }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 firstName">
                                            <span
                                                class="text-gray-700 px-6 py-3 flex items-center">{{ $award->email }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 firstName">
                                            <span
                                                class="text-gray-700 px-6 py-3 flex items-center">{{ $award->phone }}</span>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 firstName">
                                            <span
                                                class="text-gray-700 px-6 py-3 flex items-center">{{ $award->address }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                            <span class="text-xs xs:text-sm text-gray-900">
                            </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                {{ $awards->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>


    </div>
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
</body>

</html>

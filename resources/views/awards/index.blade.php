<div class="flex">
    <div class="flex w-2/5 md:w-1/4 h-screen bg-white">
        <div class="mx-auto py-10">
            <h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">Peoples Awards</h1>
            <ul>
                <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="font-semibold">
                        <a href="{{ url('/awards') }}" class="">Premiados</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    {{-- End Menu --}}
    <main class=" min-h-screen w-full">
        <nav class="flex justify-end px-10 bg-white py-6">

            <div class="flex items-end">
                <a href="{{ url('/logout') }}" class="text-sm text-gray-700  hover:text-red-600">Cerrar sesión</a>
            </div>
        </nav>
        <div class="w-11/12">
            {{-- Awards content --}}
                @include('awards.table', ['awards'])
        </div>
    </main>
</div>

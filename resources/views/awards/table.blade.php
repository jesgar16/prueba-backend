    <div class="antialiased font-sans bg-gray-200">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="py-4 card bg-white rounded-lg border border-gray-200 shadow-md">
                    <h2 class="px-4 text-2 font-bold leading-tight">Listado de premios</h2>
                </div>
                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="flex flex-row mb-1 sm:mb-0">
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <tbody>
                                @php
                                    $count = 0;
                                @endphp
                                <tr>
                                    @foreach ($awards as $award)
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <a onclick="toggleModal('{{ $award->name }}')" type="button"
                                                class="flex leading-tight items-center block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="{{ asset('award.png') }}"
                                                        alt="award-icon" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $award->name }}
                                                    </p>
                                                </div>
                                            </a>
                                        </td>
                                        @php
                                            $count += 1;
                                        @endphp
                                        @if ($count == 5)
                                </tr>
                                @endif
                                @continue
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
            </div>
        </div>
    </div>
    @include('awards.modal')

<x-layout>
    <div x-data="{ kolom2: true, kolom1: false }">
        <nav class="w-full h-24 bg-gradient-to-r from-[#FD666D] to-[#FBBC05] drop-shadow-sm fixed z-10">
            <div class="w-full h-8 bg-[#FBBC05]"></div>
            <div class="flex px-6 lg:px-8 h-16">
                <div class="flex item-center -ms-4 md:ms-0 md:justify-center justify-between w-full">
                    <a href="" class="text-white items-center mr-24 flex">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor" F
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.0197 14.5572L18.4447 10.1322C18.6776 9.89804 18.8082 9.58123 18.8082 9.251C18.8082 8.92077 18.6776 8.60395 18.4447 8.36975C18.3285 8.25259 18.1903 8.15959 18.038 8.09613C17.8856 8.03267 17.7223 8 17.5572 8C17.3922 8 17.2289 8.03267 17.0765 8.09613C16.9242 8.15959 16.786 8.25259 16.6697 8.36975L11.3697 13.6697C11.2526 13.786 11.1596 13.9242 11.0961 14.0765C11.0327 14.2289 11 14.3922 11 14.5572C11 14.7223 11.0327 14.8856 11.0961 15.038C11.1596 15.1903 11.2526 15.3285 11.3697 15.4447L16.6697 20.8072C16.7865 20.9231 16.9251 21.0148 17.0774 21.077C17.2297 21.1392 17.3927 21.1707 17.5572 21.1698C17.7218 21.1707 17.8848 21.1392 18.0371 21.077C18.1894 21.0148 18.3279 20.9231 18.4447 20.8072C18.6776 20.573 18.8082 20.2562 18.8082 19.926C18.8082 19.5958 18.6776 19.279 18.4447 19.0447L14.0197 14.5572Z"
                                fill="white" />
                            />
                        </svg>
                        <p class="font-poppins font-normal">Cari Resep</p>
                    </a>
                </div>
            </div>
            <div class="bg-white pt-2 pb-2">
                <form class="mx-4 ">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <div class="flex">
                            <input type="search" id="default-search"
                                class="block h-12 w-72 p-1 ps-10 text-sm text-gray-900 border-none focus:border-transparent focus:outline-none focus:ring-0  rounded-md bg-gray-100 "
                                placeholder="Search Mockups, Logos..." required />
                            <button
                                class="bg-gray-100 h-12 flex items-center rounded-md p-3 ms-2 hover:text-white hover:bg-[#FBBC05] "
                                @click="kolom2 = true; kolom1 = false;">
                                <svg version="1.1" id="fi_747327" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    width="24" height="24" fill="currentColor"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M176.792,0H59.208C26.561,0,0,26.561,0,59.208v117.584C0,209.439,26.561,236,59.208,236h117.584
                                            C209.439,236,236,209.439,236,176.792V59.208C236,26.561,209.439,0,176.792,0z M196,176.792c0,10.591-8.617,19.208-19.208,19.208
                                            H59.208C48.617,196,40,187.383,40,176.792V59.208C40,48.617,48.617,40,59.208,40h117.584C187.383,40,196,48.617,196,59.208
                                            V176.792z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M452,0H336c-33.084,0-60,26.916-60,60v116c0,33.084,26.916,60,60,60h116c33.084,0,60-26.916,60-60V60
                                            C512,26.916,485.084,0,452,0z M472,176c0,11.028-8.972,20-20,20H336c-11.028,0-20-8.972-20-20V60c0-11.028,8.972-20,20-20h116
                                            c11.028,0,20,8.972,20,20V176z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M176.792,276H59.208C26.561,276,0,302.561,0,335.208v117.584C0,485.439,26.561,512,59.208,512h117.584
                                            C209.439,512,236,485.439,236,452.792V335.208C236,302.561,209.439,276,176.792,276z M196,452.792
                                            c0,10.591-8.617,19.208-19.208,19.208H59.208C48.617,472,40,463.383,40,452.792V335.208C40,324.617,48.617,316,59.208,316h117.584
                                            c10.591,0,19.208,8.617,19.208,19.208V452.792z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M452,276H336c-33.084,0-60,26.916-60,60v116c0,33.084,26.916,60,60,60h116c33.084,0,60-26.916,60-60V336
                                            C512,302.916,485.084,276,452,276z M472,452c0,11.028-8.972,20-20,20H336c-11.028,0-20-8.972-20-20V336c0-11.028,8.972-20,20-20
                                            h116c11.028,0,20,8.972,20,20V452z"></path>
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </button>
                            <button
                                class="bg-gray-100 h-12 flex items-center rounded-md p-3 ms-2 hover:text-white hover:bg-gradient-to-r hover:from-[#FD666D] hover:to-[#FBBC05]"
                                @click="kolom2 = false; kolom1 = true;">
                                <svg height="24" viewBox="0 0 24 24" width="24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" id="fi_6473951">
                                    <g id="_01" data-name="01">
                                        <path
                                            d="m22 15.73126v4.03748c0 1.59375-.6 2.23126-2.1 2.23126h-15.8c-1.5 0-2.1-.63751-2.1-2.23126v-4.03748c0-1.59375.6-2.23126 2.1-2.23126h15.8c1.5 0 2.1.63751 2.1 2.23126zm-2.1-13.73126h-15.8c-1.5 0-2.1.63751-2.1 2.23126v4.03748c0 1.59375.6 2.23126 2.1 2.23126h15.8c1.5 0 2.1-.63751 2.1-2.23126v-4.03748c0-1.59375-.6-2.23126-2.1-2.23126z">
                                        </path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
        <main class="pt-44 pb-10">
            <div class="mx-auto md:mt-2 lg:px-8 block max-w-sm">
                <div class="w-auto px-1">
                    <div class="flex justify-between flex-wrap" x-show="kolom2">
                        @php
                            $counter = 0;
                        @endphp
                        @foreach ($articles as $a)
                            @if ($counter % 2 == 0)
                                <div class="flex space-x-4 mb-4">
                            @endif
                            <a href="{{ route('articles.show', [$a->id]) }}" class="relative flex flex-col w-1/2">
                                <div class="relative">
                                    <button class="absolute top-2 right-2"> <!-- Adjust right and top positioning -->
                                        <img src="http://127.0.0.1:8000/images/bookmark.svg" class="w-8 h-8"
                                            alt="">
                                    </button>
                                    <img src="{{ URL::asset('storage/' . $a->image) }}" alt=""
                                        class="w-full h-32 object-cover rounded-md">
                                </div>
                                <p class="font-poppins font-medium text-lg">
                                    @php
                                        $titleWords = explode(' ', $a->title);
                                        $titleSnippet = implode(' ', array_slice($titleWords, 0, 4));
                                    @endphp
                                    {{ $titleSnippet }}{{ count($titleWords) > 4 ? '...' : '' }}
                                </p>
                                <div class="flex items-center">
                                    <p class="font-poppins font-normal text-base text-gray-400">20</p>
                                    <p class="font-poppins font-thin text-base text-gray-400 ms-2">dibaca</p>
                                </div>
                            </a>
                            @php
                                $counter++;
                            @endphp

                            @if ($counter % 2 == 0)
                    </div>
                    @endif
                    @endforeach
                    @if ($counter % 2 != 0)
                </div>
                @endif
            </div>
    </div>

    <div class="flex flex-col justify-between" x-show="kolom1">
        @foreach ($articles as $a)
            <a href="{{ route('articles.show', [$a->id]) }}" class="relative mb-4">
                <button class="absolute top-2 right-2">
                    <img src="http://127.0.0.1:8000/images/bookmark.svg" class="w-8 h-8" alt="">
                </button>
                <div>
                    <img src="{{ URL::asset('storage/' . $a->image) }}" alt=""
                        class="w-full h-32 object-cover rounded-md">
                </div>
                <p class="font-poppins font-medium text-lg">
                    @php
                        $titleWords = explode(' ', $a->title);
                        $titleSnippet = implode(' ', array_slice($titleWords, 0, 4));
                    @endphp
                    {{ $titleSnippet }}{{ count($titleWords) > 4 ? '...' : '' }}
                </p>
                <div class="flex items-center">
                    <p class="font-poppins font-normal text-base text-gray-400">20</p>
                    <p class="font-poppins font-thin text-base text-gray-400 ms-2">dibaca</p>
                </div>
            </a>
        @endforeach
    </div>
    </main>
    </div>
    <x-footer></x-footer>
</x-layout>

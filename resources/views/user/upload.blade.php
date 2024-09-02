<x-layout>
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
                    <p class="font-poppins font-normal">Tambah Tentang</p>
                </a>
            </div>
        </div>
    </nav>
    <main class="pt-24 ">
        <div class="mx-auto pb-20">
            <div class="w-auto h-40 bg-gradient-to-t from-gray-500 to-gray-300 flex items-center">
                <p class="font-poppins font-normal text-2xl ms-4 text-white">Tentang Masakan</p>
            </div>
            <div class="w-auto flex">
                <button class="flex flex-grow items-center justify-center bg-gray-600">
                    <p class="font-poppins font-light text-white px-5 py-2">Tentang</p>
                </button>
                <button class="flex flex-grow items-center justify-center border-l border-white bg-gray-600">
                    <p class="font-poppins font-light text-white px-5 py-1 ms-2">Bahan</p>
                </button>
                <button class="flex flex-grow items-center border-l border-white justify-center bg-gray-600">
                    <p class="font-poppins font-light text-white px-5 py-2 ">Langkah</p>
                </button>
            </div>
            <form action="" enctype="multipart/form-data" class="mx-3 ">
                <div class="mt-5 mx-3 w-auto flex flex-col ">
                    <input type="text" name="judul" placeholder="Tulis judul makanan"
                        class="p-3 text-gray-400 font-poppins font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                    <input type="text" name="nama" placeholder="Nama pemilik resep"
                        class="p-3 text-gray-400 font-poppins mt-3 font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                    <div class="flex mt-3 items-center justify-center w-full">
                        <label
                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-400  rounded-lg cursor-pointer">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <div class="rounded-full border-1">
                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </div>
                                <p class="mb-2 text-sm text-gray-500"><span class="f">Tambah Gambar</span>
                                </p>
                            </div>
                            <input type="file" name="gambar" class="hidden" />
                        </label>
                    </div>
                    <textarea placeholder="Deskripsi tulis disini ya" name="deskripsi"
                        class="p-3 text-gray-400 font-poppins mt-3 font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]"></textarea>
                    <label for="waktuMasak" class="font-poppins font-">Waktu Masak</label>
                    <div class="w-auto flex justify-between">
                        <input type="number" placeholder="Jam" name="jam"
                            class="p-2 font-poppins font-thin rounded-md flex-1 flex-grow focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] w-20">
                        <input type="number" placeholder="Menit" name="menit"
                            class="p-2 font-poppins font-thin rounded-md flex-1 flex-grow focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] w-20 ms-2">
                        <input type="number" placeholder="Detik" name="detik"
                            class="p-2 font-poppins font-thin rounded-md flex-1 flex-grow focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] w-20 ms-2">
                    </div>
                    <input type="number" name="kalori" placeholder="Jumlah Kalori Makanan"
                        class="p-3 mt-3 text-gray-400 font-poppins font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                </div>
                <div class="mt-3 flex  m-3 justify-end">
                    <button type="submit"
                        class="bg-[#FBBC05] rounded-md p-2 text-white font-poppins font-thin">Simpan</button>
                </div>
            </form>
            <form action="" name="tentang" enctype="multipart/form-data" class="mx-3 hidden">
                <div class="mt-5 mx-3 w-auto flex flex-col">
                    <div class="flex">
                        <div
                            class="p-3 text-gray-400 font-poppins border w-12 text-center border-gray-600 font-thin rounded-md  focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                            <p class="font-poppins">1</p>
                        </div>
                        <input type="text" name="judul" placeholder="Tulis judul makanan"
                            class="p-3 text-gray-400 ms-2 font-poppins font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                        <input type="text" name="judul" placeholder="Tulis judul makanan"
                            class="p-3 text-gray-400 ms-2 font-poppins font-thin rounded-md w-20 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                    </div>
                    <button class="flex items-center mt-4" type="button">

                        <svg aria-hidden="true" class="w-7 h-7 mb-3 rounded-full bg-gray-200 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>

                        <p class="font-poppins font-normal text-xl ms-3">Tambahkan Bahan</p>
                    </button>
                </div>
                <div class="mt-3 flex  m-3 justify-end">
                    <button type="submit"
                        class="bg-[#FBBC05] rounded-md p-2 text-white font-poppins font-thin">Simpan</button>
                </div>
            </form>
            <form action="" name="bahan" enctype="multipart/form-data" class="mx-3 hidden">
                <div class="mt-5 mx-3 w-auto flex flex-col">
                    <div class="flex">
                        <div
                            class="p-3 text-gray-400 font-poppins border w-12 text-center border-gray-600 font-thin rounded-md  focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                            <p class="font-poppins">1</p>
                        </div>
                        <input type="text" name="judul" placeholder="Tulis judul makanan"
                            class="p-3 text-gray-400 ms-2 font-poppins font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                        <input type="text" name="judul" placeholder="Tulis judul makanan"
                            class="p-3 text-gray-400 ms-2 font-poppins font-thin rounded-md w-20 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                    </div>
                    <button class="flex items-center mt-4" type="button">

                        <svg aria-hidden="true" class="w-7 h-7 mb-3 rounded-full bg-gray-200 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>

                        <p class="font-poppins font-normal text-xl ms-3">Tambahkan Bahan</p>
                    </button>
                </div>
                <div class="mt-3 flex  m-3 justify-end">
                    <button type="submit"
                        class="bg-[#FBBC05] rounded-md p-2 text-white font-poppins font-thin">Simpan</button>
                </div>
            </form>
            <form action="" name="langkah" enctype="multipart/form-data" class="mx-3 hidden">
                <div class="mt-5 mx-3 w-auto flex flex-col">
                    <div class="flex">
                        <div
                            class="p-3 text-gray-400 font-poppins border-b-2 w-12 text-center bg-white border-gray-600 font-thin    focus:text-[#3d3d3d]">
                            <p class="font-poppins">1.</p>
                        </div>
                        <input type="text" name="langkah" placeholder="Tulis judul makanan"
                            class="p-3 text-gray-400  font-poppins font-thin w-full border-l-0 border-t-0 border-r-0 border-b-2 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                    </div>
                    <button class="flex items-center mt-4" type="button">
                        <svg aria-hidden="true" class="w-7 h-7 mb-3 rounded-full bg-gray-200 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>

                        <p class="font-poppins font-normal text-xl ms-3">Tambahkan Bahan</p>
                    </button>
                </div>
                <div class="mt-3 flex  m-3 justify-end">
                    <button type="submit"
                        class="bg-[#FBBC05] rounded-md p-2 text-white font-poppins font-thin">Simpan</button>
                </div>
            </form>
        </div>
    </main>

    <x-footer></x-footer>
    {{-- <div class="bg-white w-full h-14 fixed bottom-0 right-0">
        <div class="flex justify-around items-center">
            <a href="#" class="text-gradient flex flex-col items-center group">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="grad-default" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#3d3d3d;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#3d3d3d;stop-opacity:1" />
                        </linearGradient>
                        <linearGradient id="grad-hover" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#FD666D;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FBBC05;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <g class="icon">
                        <path d="m9.5 17.5c-.27614 0-.5.2239-.5.5s.22386.5.5.5h5c.2761 0 .5-.2239.5-.5s-.2239-.5-.5-.5z"
                            fill="url(#grad-default)"></path>
                        <path clip-rule="evenodd"
                            d="m14.1688 2.57514c-1.2716-1.00388-3.066-1.00388-4.33756 0l-6.5 5.13158c-.84073.66374-1.33124 1.67592-1.33124 2.74708v8.0462c0 1.933 1.567 3.5 3.5 3.5h13c1.933 0 3.5-1.567 3.5-3.5v-8.0462c0-1.07116-.4905-2.08334-1.3312-2.74708zm-3.7179.78488c.9083-.71706 2.1899-.71706 3.0982 0l6.5 5.13158c.6005.4741.9509 1.19709.9509 1.9622v8.0462c0 1.3807-1.1193 2.5-2.5 2.5h-13c-1.38071 0-2.5-1.1193-2.5-2.5v-8.0462c0-.76511.35036-1.4881.95089-1.9622z"
                            fill="url(#grad-default)" fill-rule="evenodd"></path>
                    </g>
                </svg>
                <p class="font-poppins font-thin text-xs ">Beranda</p>
            </a>
            <a href="#" class="text-gradient flex flex-col items-center group">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="grad-default" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#3d3d3d;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#3d3d3d;stop-opacity:1" />
                        </linearGradient>
                        <linearGradient id="grad-hover" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#FD666D;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FBBC05;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <g class="icon">
                        <path
                            d="m10 3.5c-3.587 0-6.5 2.913-6.5 6.5s2.913 6.5 6.5 6.5 6.5-2.913 6.5-6.5-2.913-6.5-6.5-6.5zm0 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5z"
                            fill="url(#grad-default)"></path>
                        <path
                            d="m20.354 19.646-5.759-5.758c-.195-.195-.512-.195-.707 0s-.195.512 0 .707l5.758 5.759c.196.195.512.195.708 0 .195-.196.195-.512 0-.708z"
                            fill="url(#grad-default)"></path>
                    </g>
                </svg>
                <p class="font-poppins font-thin text-xs">Cari</p>
            </a>

            <a href="#" class="text-gradient flex flex-col items-center group">
                <svg id="fi_3024515" enable-background="new 0 0 189.524 189.524" height="24"
                    viewBox="0 0 189.524 189.524" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
                    <defs>
                        <linearGradient id="grad-hover" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#FD666D; stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FBBC05; stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <g>
                        <g>
                            <path clip-rule="evenodd"
                                d="m94.762 180.048c47.102 0 85.286-38.183 85.286-85.286 0-47.102-38.183-85.286-85.286-85.286-47.102 0-85.286 38.184-85.286 85.286s38.184 85.286 85.286 85.286zm0 9.476c52.335 0 94.762-42.427 94.762-94.762 0-52.336-42.427-94.762-94.762-94.762-52.336 0-94.762 42.426-94.762 94.762 0 52.335 42.426 94.762 94.762 94.762z"
                                fill-rule="evenodd"></path>
                        </g>
                        <g>
                            <path clip-rule="evenodd"
                                d="m132.667 94.762c0 2.616-2.122 4.738-4.738 4.738h-66.334c-2.617 0-4.738-2.122-4.738-4.738s2.121-4.738 4.738-4.738h66.333c2.617 0 4.739 2.122 4.739 4.738z"
                                fill-rule="evenodd"></path>
                        </g>
                        <g>
                            <path clip-rule="evenodd"
                                d="m94.762 132.667c-2.616 0-4.738-2.122-4.738-4.738v-66.334c0-2.617 2.122-4.738 4.738-4.738s4.738 2.121 4.738 4.738v66.333c0 2.617-2.122 4.739-4.738 4.739z"
                                fill-rule="evenodd"></path>
                        </g>
                    </g>
                </svg>
                <p class="font-poppins font-thin text-xs text-gradient-text">Upload</p>
            </a>

            <a href="#" class="text-gradient flex flex-col items-center group">
                <svg id="fi_9283030" class="icon" height="24" viewBox="0 0 64 64" width="24"
                    xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                    <defs>
                        <linearGradient id="grad-hover" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#FD666D;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FBBC05;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <path
                        d="m54.172 12.209a6.052 6.052 0 0 0 -4.391-1.693c-6.9.229-12.515 1.729-16.7 4.461a1.98 1.98 0 0 1 -2.164 0c-4.182-2.731-9.8-4.231-16.7-4.46a6.024 6.024 0 0 0 -4.39 1.693 5.948 5.948 0 0 0 -1.827 4.309v26.053a5.957 5.957 0 0 0 5.776 5.991c6.1.2 11.176 1.55 15.091 4.023a5.907 5.907 0 0 0 6.268 0c3.913-2.473 8.99-3.826 15.089-4.023a5.957 5.957 0 0 0 5.776-5.991v-26.053a5.948 5.948 0 0 0 -1.828-4.31zm-40.267 32.355a2 2 0 0 1 -1.905-1.992v-26.053a1.985 1.985 0 0 1 .61-1.436 2.011 2.011 0 0 1 1.408-.57h.068c6.156.2 11.083 1.487 14.644 3.811a5.916 5.916 0 0 0 1.27.613v29.689a34.536 34.536 0 0 0 -16.095-4.062zm38.095-1.992a2 2 0 0 1 -1.9 1.992 34.521 34.521 0 0 0 -16.1 4.063v-29.689a5.963 5.963 0 0 0 1.27-.613c3.561-2.324 8.488-3.607 14.643-3.811a1.965 1.965 0 0 1 1.477.569 1.985 1.985 0 0 1 .61 1.436z">
                    </path>
                </svg>
                <p class="font-poppins font-thin text-xs">Artikel</p>
            </a>
            <a href="#" class="text-gradient flex flex-col items-center group">
                <svg version="1.1" id="fi_484664" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 512 512"
                    class="icon" xml:space="preserve">
                    <defs>
                        <linearGradient id="grad-hover" x1="0%" y1="0%" x2="100%"
                            y2="100%">
                            <stop offset="0%" style="stop-color:#FD666D; stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FBBC05; stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <g>
                        <g>
                            <path
                                d="M256,151c-57.897,0-105,47.103-105,105c0,57.897,47.103,105,105,105c57.897,0,105-47.103,105-105 C361,198.103,313.897,151,256,151z M256,331c-41.355,0-75-33.645-75-75c0-41.355,33.645-75,75-75s75,33.645,75,75 S297.355,331,256,331z">
                            </path>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M500.582,211.434l-58.674-14.428c-3.532-11.13-8.068-21.925-13.551-32.249c8.78-14.634,27.343-45.573,27.343-45.573 c3.541-5.902,2.611-13.457-2.256-18.324l-42.426-42.426c-4.867-4.867-12.422-5.797-18.324-2.256 c-0.38,0.228-30.777,18.466-45.626,27.355c-10.269-5.431-20.995-9.927-32.052-13.434c-4.428-17.976-14.451-58.686-14.452-58.686 C298.914,4.711,292.902,0,286,0h-60c-6.903,0-12.915,4.711-14.565,11.414c-4.126,16.76-11.024,44.779-14.45,58.68 c-11.762,3.73-23.143,8.578-34.001,14.482c-6.428-3.856-16.007-9.604-24.869-14.921l-22.462-13.477 c-5.905-3.541-13.457-2.61-18.324,2.256L54.901,100.86c-4.867,4.867-5.797,12.422-2.256,18.324 c0.2,0.335,17.785,29.644,29.271,48.869c-4.712,9.31-8.665,18.986-11.817,28.919c-20.002,4.976-58.223,14.35-58.671,14.46 C4.718,213.077,0,219.092,0,226v60c0,6.909,4.719,12.923,11.429,14.568c0.443,0.109,38.381,9.411,58.687,14.436 c3.565,11.302,8.184,22.273,13.796,32.78l-26.194,43.66c-3.541,5.902-2.611,13.458,2.256,18.324l42.427,42.427 c4.867,4.868,12.421,5.797,18.324,2.256c0.369-0.222,29.463-17.678,43.746-26.227c10.419,5.547,21.313,10.131,32.547,13.692 l14.416,58.66C213.079,507.284,219.093,512,226,512h60c6.904,0,12.917-4.713,14.566-11.418l14.427-58.669 c11.539-3.661,22.671-8.39,33.257-14.128c14.427,8.656,44.444,26.667,44.444,26.667c5.901,3.541,13.457,2.612,18.324-2.256 l42.426-42.427c4.867-4.867,5.797-12.422,2.256-18.324c0,0-18.271-30.452-26.958-44.931c5.308-10.088,9.712-20.634,13.161-31.511 c17.824-4.399,58.19-14.317,58.676-14.436C507.285,298.919,512,292.906,512,286v-60C512,219.095,507.287,213.083,500.582,211.434z M482,274.24c-17.32,4.257-48.723,11.979-54.72,13.479l-1.131,0.283c-5.231,1.36-9.326,5.43-10.719,10.653 c-3.795,14.229-9.495,27.872-16.942,40.548c-2.779,4.732-2.753,10.605,0.069,15.312c0.78,1.301,16.489,27.483,25.393,42.322 L398.087,422.7c-15.046-9.027-41.716-25.029-41.942-25.165c-4.775-2.866-10.743-2.853-15.501,0.035 c-13,7.885-27.109,13.892-41.938,17.854c-5.177,1.383-9.224,5.422-10.614,10.597c-0.828,3.081-1.644,6.34-1.658,6.397L274.241,482 h-36.479l-10.813-44.042l-2.916-11.664c-1.322-5.292-5.415-9.45-10.686-10.855c-14.533-3.876-28.479-9.747-41.449-17.447 c-4.709-2.797-10.57-2.802-15.285-0.018c-3.23,1.908-27.254,16.313-41.282,24.728l-25.865-25.865l24.661-41.104 c2.841-4.736,2.85-10.65,0.022-15.395c-7.784-13.063-13.685-27.073-17.535-41.643c-1.397-5.286-5.56-9.393-10.863-10.719 c-10.737-2.684-39.564-9.767-55.752-13.741v-36.473c16.342-4.015,45.537-11.199,55.762-13.786 c5.271-1.334,9.408-5.417,10.812-10.671c3.564-13.347,8.822-26.228,15.63-38.286c2.646-4.686,2.578-10.43-0.177-15.053 c-7.25-12.166-20.08-33.577-27.632-46.172l25.865-25.866l12.42,7.452c14.968,8.981,31.98,19.188,32.44,19.463 c4.768,2.85,10.722,2.832,15.472-0.049c13.341-8.088,27.726-14.222,42.756-18.232c5.264-1.404,9.352-5.552,10.68-10.836 c0.282-1.121,9.071-36.815,13.728-55.726h36.49c4.915,19.958,13.621,55.312,13.724,55.722c1.326,5.288,5.417,9.44,10.685,10.845 c14.382,3.836,28.193,9.626,41.05,17.208c4.714,2.781,10.57,2.773,15.276-0.021c4.208-2.498,28.881-17.293,43.106-25.827 l25.864,25.864c-9.037,15.062-25.121,41.869-25.795,42.991c-2.836,4.725-2.853,10.625-0.043,15.367 c7.628,12.872,13.451,26.714,17.308,41.141c1.382,5.167,5.408,9.207,10.57,10.604c3.097,0.839,6.373,1.657,6.428,1.671 L482,237.758V274.24z">
                            </path>
                        </g>
                    </g>
                </svg>
                <p class="font-poppins font-thin text-xs text-gradient-text">Pengaturan</p>
            </a>
        </div>
    </div> --}}
    
</x-layout>

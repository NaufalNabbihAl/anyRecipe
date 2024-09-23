<x-layout>
    <nav class="w-full h-44 bg-gradient-to-r from-[#FD666D] to-[#FBBC05] drop-shadow-sm fixed z-10">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="px-6 lg:px-8 h-16 mt-5">
            <div class="flex justify-center w-full">
                <form action="{{ route('user.dashboard') }}" method="GET" class="w-72">
                    <label for="search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="search" name="search"
                            class="block h-12 w-full p-1 ps-10 text-sm text-gray-900 border border-gray-300 rounded bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari Resep" value="{{ $search ?? '' }}" />

                    </div>
                </form>
                <a href="#"
                    class="relative ms-1 w-12 flex justify-center items-center rounded-md bg-white p-1 text-gray-600 hover:text-gray-600 focus:outline-none focus:ring-2">
                    <img src="{{ asset('images/notifications.svg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="px-6 lg:px-8">
            <div class="flex justify-center w-full">
                <div class="border border-1 border-white rounded-md w-auto p-2 flex items-center">
                    <img src="{{ asset('images/love.svg') }}" alt="">
                    <p class="text-white font-poppins font-normal ms-2 text-base">Favorite</p>
                </div>
                <div class="border border-1 border-white rounded-md w-auto p-2 flex items-center ms-2">
                    <img src="{{ asset('images/addUser.svg') }}" alt="">
                    <p class="text-white font-poppins font-normal ms-2 text-base">Following</p>
                </div>
                <div class="border border-1 border-white rounded-md w-auto p-2 flex items-center ms-2">
                    <img src="{{ asset('images/verifUser.svg') }}" alt="">
                    <p class="text-white font-poppins font-normal ms-2 text-base">Official</p>
                </div>
            </div>
        </div>
    </nav>
    <main class="pt-48">
        <div class="mx-auto md:mt-2 lg:px-8 block max-w-sm">
            <div class="flex min-h-full flex-col justify-center px-1 lg:my-1 ">
                <div class="relative">
                    <img src="{{ asset('images/imageSlide.svg') }}" alt="" class="w-full">

                </div>
                <p class=" font-poppins font-medium text-lg mt-4 text-gradient">Baru dilihat</p>
                <div class="flex justify-between">
                    <img src="{{ asset('images/jS1.svg') }}" class="w-28 md:w-24" alt="">
                    <img src="{{ asset('images/jS2.svg') }}" class="w-28 md:w-24" alt="">
                    <img src="{{ asset('images/jS3.svg') }}" class="w-28 md:w-24" alt="">
                </div>
            </div>
            <div class="flex min-h-full justify-between px-1 sm:mt-4 sm:mb-2 lg:my-1" >
                <p class="text-gray-400 font-poppins font-thin">Pilih Bahan</p>
                <a href="{{ route('user.search') }}" class="flex items-center hover:text-white">
                    <p class="text-gradient font-poppins">Lihat Lebih</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="flex min-h-full px-1 sm:py-1 lg:py-1">
                <div class="flex">
                    <button
                        class="flex items-center border border-1 border-gray-500 rounded-md w-auto p-2 ingredient-button"
                        data-id="1">
                        <img src="{{ asset('images/choose1.svg') }}" alt="">
                        <p class="text-[#171D2B] font-poppins ps-2">Bawang merah</p>
                    </button>
                </div>
                <div class="flex ms-4">
                    <button
                        class="flex items-center border border-1 border-gray-500 rounded-md w-auto p-2 ingredient-button"
                        data-id="291">
                        <img src="{{ asset('images/choose1.svg') }}" alt="">
                        <p class="text-[#171D2B] font-poppins ps-2">Ayam</p>
                    </button>
                </div>
            </div>
            <div class="flex min-h-full mt-2 px-1 lg:py-1" >
                <div class="flex">
                    <button class="flex items-center border border-1 border-gray-500 rounded-md p-2 ingredient-button"
                        data-id="71">
                        <img src="{{ asset('images/choose1.svg') }}" alt="">
                        <p class="text-[#171D2B] font-poppins ps-2">Bayam</p>
                    </button>
                </div>
                <div class="flex ms-2">
                    <button
                        class="flex items-center border border-1 border-gray-500 rounded-md w-auto p-2 ingredient-button"
                        data-id="292">
                        <img src="{{ asset('images/choose1.svg') }}" alt="">
                        <p class="text-[#171D2B] font-poppins ps-2">Toge</p>
                    </button>
                </div>
                <div class="flex ms-2">
                    <button
                        class="flex items-center border border-1 border-gray-500 rounded-md w-auto p-2 ingredient-button"
                        data-id="120">
                        <img src="{{ asset('images/choose1.svg') }}" alt="">
                        <p class="text-[#171D2B] font-poppins ps-2">Tomat</p>
                    </button>
                </div>
            </div>
            <div class=" min-h-full px-1 mt-10  sm:mt-2 sm:mb-1 lg:py-1 " >
                <a href="" class="hover:text-white  flex items-center">
                    <p class="text-gradient font-poppins font-medium text-lg">Masakan top teratas</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 ms-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="w-auto px-1 mt-1" >
                <div class="flex flex-wrap -mx-2">
                    @forelse ($recipes as $r)
                        <div class="w-full sm:w-1/2 px-2 mb-4">
                            <a href="{{ route('user.showRecipe', [$r->id]) }}"
                                class="relative block bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $r->image) }}" alt="{{ $r->name }}"
                                        class="w-full h-48 object-cover rounded-t-lg">
                                    <button class="absolute top-2 right-2">
                                        <img src="{{ asset('images/bookmark.svg') }}" class="w-8 h-8"
                                            alt="Bookmark">
                                    </button>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-poppins font-medium text-lg mb-2">{{ $r->name }}</h3>
                                    <div class="flex items-center">
                                        <svg id="fi_2107957" enable-background="new 0 0 24 24" height="32"
                                            viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z"
                                                fill="#ffc107"></path>
                                        </svg>
                                        <p class="font-poppins font-thin text-gray-600 text-xl ms-1">4.5</p>
                                        <p class="font-poppins font-thin text-gray-500 text-xl ms-2">(100)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="w-full px-2">
                            <p class="text-center py-4">No recipes found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="w-auto px-1">
                <img src="{{ asset('images/iklan.svg') }}" class="mt-3" alt="">
            </div>
            <div class=" min-h-full px-1 sm:mt-2 sm:mb-1 lg:py-1 mt-4">
                <a href="" class="flex items-center hover:text-white">
                    <p class="text-gradient font-poppins font-medium text-lg">Official Content</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 ms-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="w-auto px-1 -mt-5">
                <div class="flex justify-between gap-3">
                    @foreach ($randomRecipes as $rand)
                        <a href="{{ route('user.showRecipe', [$rand->id]) }}" class="relative">
                            <button>
                                <img src="{{ asset('images/bookmark.svg') }}" class="absolute top-6 right-1 w-8 h-8 "
                                    alt="">
                            </button>
                            <div>
                                <img src="{{ asset('storage/' . $rand->image) }}" alt="">
                            </div>
                            <p class="font-poppins font-medium text-lg ">{{ $rand->name }}</p>
                            <div class="flex items-center">
                                <svg id="fi_2107957" enable-background="new 0 0 24 24" height="32"
                                    viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z"
                                        fill="#ffc107"></path>
                                </svg>
                                <p class="font-poppins font-thin text-gray-600 text-xl ms-1">4.5</p>
                                <p class="font-poppins font-thin text-gray-500 text-xl ms-2">(100)</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="flex min-h-full px-1 items-center sm:mt-2 sm:mb-1 lg:py-1 mt-4">
                <a href="" class="flex items-center hover:text-white">
                    <p class="text-gradient font-poppins font-medium text-lg">Trending Article</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 ms-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
            <div class="w-auto px-1 -mt-5">
                <div class="flex justify-between gap-3 pb-24">
                    @foreach ($articles as $a)
                        <a href="{{ route('articles.show', [$a->id]) }}" class="relative">
                            <button>
                                <img src="{{ asset('images/bookmark.svg') }}" class="absolute top-6 right-1 w-8 h-8 "
                                    alt="">
                            </button>
                            <div>
                                <img src="{{ asset('storage/' . $a->image) }}" alt="">
                            </div>
                            <p class="font-poppins font-medium text-lg ">{{ $a->title }}</p>
                            <div class="flex items-center">
                                <svg id="fi_2107957" enable-background="new 0 0 24 24" height="32"
                                    viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z"
                                        fill="#ffc107"></path>
                                </svg>
                                <p class="font-poppins font-thin text-gray-600 text-xl ms-1">4.5</p>
                                <p class="font-poppins font-thin text-gray-500 text-xl ms-2">(100)</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ingredientButtons = document.querySelectorAll('.ingredient-button');
            let dashboardSelectedIngredients = [];

            function scrollToResultsIfSearched() {
                const urlParams = new URLSearchParams(window.location.search);
                const searchQuery = urlParams.get('search');

                if (searchQuery) {
                    const recipeResults = document.getElementById('recipe-results');
                    if (recipeResults) {
                        recipeResults.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            }

            ingredientButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const ingredientId = this.dataset.id;
                    if (dashboardSelectedIngredients.includes(ingredientId)) {
                        // Jika bahan sudah dipilih, hapus dari daftar
                        dashboardSelectedIngredients = dashboardSelectedIngredients.filter(id =>
                            id !== ingredientId);
                        this.classList.remove('bg-[#FBBC05]', 'text-white');
                    } else {
                        // Jika bahan belum dipilih, tambahkan ke daftar
                        dashboardSelectedIngredients.push(ingredientId);
                        this.classList.add('bg-[#FBBC05]', 'text-white');
                    }
                    localStorage.setItem('dashboardSelectedIngredients', JSON.stringify(
                        dashboardSelectedIngredients));
                });
            });

            // Inisialisasi bahan yang sudah dipilih dari localStorage
            const storedIngredients = JSON.parse(localStorage.getItem('dashboardSelectedIngredients')) || [];
            storedIngredients.forEach(id => {
                const button = document.querySelector(`.ingredient-button[data-id="${id}"]`);
                if (button) {
                    button.classList.add('bg-[#FBBC05]', 'text-white');
                    dashboardSelectedIngredients.push(id);
                }
            });

            scrollToResultsIfSearched();
        });
    </script>
</x-layout>

<x-layout>
    <nav class="w-full h-24 bg-gradient-to-r from-[#FD666D] to-[#FBBC05] drop-shadow-sm fixed ">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="flex px-6 lg:px-8 h-16">
            <div class="flex item-center -ms-4 md:ms-0 md:justify-center justify-between w-full">
                <a href="{{ route('user.search') }}" class="text-white items-center mr-24 flex">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.0197 14.5572L18.4447 10.1322C18.6776 9.89804 18.8082 9.58123 18.8082 9.251C18.8082 8.92077 18.6776 8.60395 18.4447 8.36975C18.3285 8.25259 18.1903 8.15959 18.038 8.09613C17.8856 8.03267 17.7223 8 17.5572 8C17.3922 8 17.2289 8.03267 17.0765 8.09613C16.9242 8.15959 16.786 8.25259 16.6697 8.36975L11.3697 13.6697C11.2526 13.786 11.1596 13.9242 11.0961 14.0765C11.0327 14.2289 11 14.3922 11 14.5572C11 14.7223 11.0327 14.8856 11.0961 15.038C11.1596 15.1903 11.2526 15.3285 11.3697 15.4447L16.6697 20.8072C16.7865 20.9231 16.9251 21.0148 17.0774 21.077C17.2297 21.1392 17.3927 21.1707 17.5572 21.1698C17.7218 21.1707 17.8848 21.1392 18.0371 21.077C18.1894 21.0148 18.3279 20.9231 18.4447 20.8072C18.6776 20.573 18.8082 20.2562 18.8082 19.926C18.8082 19.5958 18.6776 19.279 18.4447 19.0447L14.0197 14.5572Z"
                            fill="white" />
                    </svg>
                    <p class="font-poppins font-normal">Cari Resep</p>
                </a>
            </div>
        </div>
    </nav>
    <main class="pt-28">
        <div class="mx-auto md:mt-2 lg:px-8 block max-w-md">
            <ul class="item-list px-3" id="ingredient-list">
                @if (isset($selectedIngredients) && $selectedIngredients->count() > 0)
                    <form action="{{ route('user.found') }}" method="GET" class="inline" id="ingredient-form">
                        @foreach ($selectedIngredients as $ingredient)
                            <div class="flex items-center justify-between w-full ingredient-item"
                                data-id="{{ $ingredient->id }}">
                                <p class="font-poppins font-light text-2xl">{{ $ingredient->name }}</p>
                                <input type="hidden" name="ingredient[]" value="{{ $ingredient->id }}">
                                <button type="button" class="delete-btn font-poppins font-normal text-5xl"
                                    data-id="{{ $ingredient->id }}">×</button>
                            </div>
                        @endforeach
                    </form>
                @else
                    <p>Tidak ada bahan yang dipilih.</p>
                @endif
            </ul>
            {{-- <p id="error-message" class="text-red-500 font-poppins font-normal mt-2 hidden">Kamu harus memilih bahan
                makanan dulu</p> --}}

            <div id="error-message" class="text-red-500 font-poppins font-normal mt-2 hidden">
                <div
                    class="mx-auto mt-20 md:mt-2 sm:px-6 lg:px-8 block max-w-sm p-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8 sm:py-6 lg:py-1 ">
                        <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-11 flex justify-center">
                            <img src="{{ asset('images/dangerIcon.svg') }}" alt="DangerIcon">
                        </div>
                        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2
                                class="mt-8 text-center text-2xl font-poppins font-semibold leading-9 tracking-tight text-[#3D3D3D]">
                                Gagal Cari Resep
                            </h2>
                            <p class="text-center font-poppins font-normal ">Kamu harus memilih bahan
                                makanan dulu</p>
                        </div>
                        <div class="mt-5 mb-5 flex text-center">
                            <a href="{{ route('user.search') }}" class="w-full h-10 text-white bg-[#FBBC05] rounded py-2 px-2">Cari
                                Bahan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="bg-white w-full h-28 fixed bottom-4">
        <div class="flex justify-between px-4">
            <div>
                <div class="flex mt-2 items-center">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg" id="fi_9446643">
                        <g fill="rgb(0,0,0)">
                            <path
                                d="m12.75 11c0-.4142-.3358-.75-.75-.75s-.75.3358-.75.75v6c0 .4142.3358.75.75.75s.75-.3358.75-.75z">
                            </path>
                            <path clip-rule="evenodd"
                                d="m12 1.25c-5.93706 0-10.75 4.81294-10.75 10.75 0 5.9371 4.81294 10.75 10.75 10.75 5.9371 0 10.75-4.8129 10.75-10.75 0-5.93706-4.8129-10.75-10.75-10.75zm-9.25 10.75c0-5.10863 4.14137-9.25 9.25-9.25 5.1086 0 9.25 4.14137 9.25 9.25 0 5.1086-4.1414 9.25-9.25 9.25-5.10863 0-9.25-4.1414-9.25-9.25z"
                                fill-rule="evenodd"></path>
                            <path d="m13 8c0 .55228-.4477 1-1 1s-1-.44772-1-1 .4477-1 1-1 1 .44772 1 1z"></path>
                        </g>
                    </svg>
                    <p class="font-poppins font-light text-sm ms-2">Bahan Terpilih</p>
                </div>
                <p class="font-poppins font-medium text-xl ms-10" id="selected-count">0</p>
            </div>
            <div>
                <button type="button" id="submit-button"
                    class="flex w-auto justify-center text-white bg-[#FBBC05] rounded-lg bg-gradient-to-r px-4 py-3 font-poppins font-normal leading-6 shadow-sm mt-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
                    Lanjutkan
                </button>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('ingredient-form');
            const submitButton = document.getElementById('submit-button');
            const errorMessage = document.getElementById('error-message');
            const ingredientList = document.getElementById('ingredient-list');

            function updateSelectedCount() {
                const ingredientCount = document.querySelectorAll('input[name="ingredient[]"]').length;
                document.getElementById('selected-count').textContent = ingredientCount;
            }

            function removeIngredient(id) {
                const ingredientItem = document.querySelector(`.ingredient-item[data-id="${id}"]`);
                if (ingredientItem) {
                    ingredientItem.remove();
                    updateSelectedCount();
                }
            }

            // Add event delegation for delete buttons
            ingredientList.addEventListener('click', function(e) {
                if (e.target.classList.contains('delete-btn')) {
                    const id = e.target.getAttribute('data-id');
                    removeIngredient(id);
                }
            });

            submitButton.addEventListener('click', function(e) {
                e.preventDefault();
                const ingredients = ingredientList.querySelectorAll('input[name="ingredient[]"]');
                if (ingredients.length === 0) {
                    errorMessage.classList.remove('hidden');
                } else {
                    errorMessage.classList.add('hidden');
                    form.submit();
                }
            });

            // Initial count update
            updateSelectedCount();
        });
    </script>
</x-layout>

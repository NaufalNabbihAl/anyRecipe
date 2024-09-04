<x-layout>
    <nav class="w-full h-24 bg-white drop-shadow-sm">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="flex items-center px-6 lg:px-8 h-16">
            <div class="flex -ms-16 lg:-ms-16 justify-center w-full">
                <a href="#" class="mt-1 mr-24">
                    <img src="{{ asset('images/l-arrow.svg') }}" alt="">
                </a>
                <h1 class="font-aldo space-x-1 font-black text-3xl text-[#3D3D3D]">AnyRecipe</h1>
            </div>
        </div>
    </nav>

    <main class="relative z-10" x-data="{ showModal: {{ session('login_failed') ? 'true' : 'false' }} }">
        <div 
            class="mx-auto mt-20 md:mt-2 sm:px-6 lg:px-8 block max-w-sm p-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex min-h-full flex-col justify-center px-6 lg:px-8 sm:py-6 lg:py-1 ">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                    <h2
                        class="mt-8 text-center text-2xl font-poppins font-semibold leading-9 tracking-tight text-[#3D3D3D]">
                        Masuk</h2>
                </div>
                <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="{{ route('auth.loginAuth') }}" method="POST">
                        @csrf
                        <div>
                            <div class="relative mt-2">
                                <input id="name" name="name" type="text" placeholder="Masukkan nama pengguna"
                                    required
                                    class="block font-poppins font-extralight w-full flex-1 bg-white border-t-0 border-l-0 border-r-0 py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6 pl-10">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <img src="{{ asset('images/user.svg') }}" class="h-4 w-4 text-gray-500"
                                        alt="Icon User">
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="mt-2 relative" x-data="{ showPassword: false }">
                                <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                    placeholder="Masukkan kata sandi" autocomplete="current-password" required
                                    class="block font-poppins font-extralight w-full flex-1 bg-white border-t-0 border-l-0 border-r-0 py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6 pl-10">
                                <span @click="showPassword = !showPassword"
                                    class="absolute  inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                    <i :class="showPassword ? 'fa fa-eye-slash' : 'fa fa-eye'"
                                        class="text-gray-500"></i>
                                </span>
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <img src="{{ asset('images/lock.svg') }}" class="h-4 w-4 text-gray-500"
                                        alt="Icon User">
                                </span>
                            </div>
                        </div>
                        <div>
                            <button type="submit" 
                                class="flex w-full h-10 justify-center text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Masuk</button>
                        </div>
                        <div class="flex justify-between mt-3">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('auth.create') }}"
                                    class="font-poppins font-medium text-sm text-[#3D3D3D]">Buat Akun</p>
                            </div>
                            <a href="{{ route('auth.reset') }}"
                                class="font-poppins font-medium text-sm text-[#3D3D3D]">Lupa Password
                                ?</a>
                        </div>
                    </form>
                    <div class="flex items-center space-x-2 mt-3">
                        <div class="border-t border-gray-400 w-36 md:w-28"></div>
                        <span class="text-gray-500">atau</span>
                        <div class="border-t border-gray-400 w-36 md:w-28"></div>
                    </div>
                    <div class="flex justify-center my-8 ">
                        <div
                            class="block mr-10 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-70">
                            <img class="p-2" src="{{ asset('images/google.svg') }}" alt="">
                        </div>
                        <div
                            class="block mr-10 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-70">
                            <img class="p-2" src="{{ asset('images/facebook.svg') }}" alt="">
                        </div>
                        <div
                            class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-70">
                            <img class="p-2" src="{{ asset('images/whatapps.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="showModal" @click.away="showModal = false"
            class="fixed inset-0 flex items-center justify-center z-10 bg-black bg-opacity-50"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            <div
                class="mx-auto mt-20 md:mt-2 sm:px-6 lg:px-8 block max-w-sm p-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex min-h-full flex-col justify-center px-6 lg:px-8 sm:py-6 lg:py-1 ">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-11 flex justify-center">
                        <img src="{{ asset('images/dangerIcon.svg') }}" alt="DangerIcon">
                    </div>
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <h2
                            class="mt-8 text-center text-2xl font-poppins font-semibold leading-9 tracking-tight text-[#3D3D3D]">
                            Gagal Masuk</h2>
                        <p class="text-center font-poppins font-normal ">Sepertinya kamu salah masukan nama pengguna
                            atau
                            password
                            Tolong cek kembali ya</p>
                    </div>
                    <div class="mt-5 mb-5">
                        <button @click="showModal = false" class="w-full h-10 text-white bg-[#FBBC05] rounded">Coba
                            Lagi</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
</x-layout>

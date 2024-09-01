<x-layout>
    <nav class="w-full h-24 bg-white drop-shadow-sm">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="flex items-center px-6 lg:px-8 h-16">
            <div class="flex -ms-16 lg:-ms-16 justify-center w-full">
                <a href="{{ route('auth.login') }}" class="mt-1 mr-24">
                    <img src="{{ asset('images/l-arrow.svg') }}" alt="">
                </a>
                <h1 class="font-aldo space-x-1 font-black text-3xl text-[#3D3D3D]">AnyRecipe</h1>
            </div>
        </div>
    </nav>
    <main class="relative z-10">
        <div class="mx-auto mt-60 md:mt-14 sm:px-6 lg:px-1 max-w-sm block px-4 ">
            <div class="flex min-h-full flex-col justify-center px-4 lg:px-8 sm:py-6 lg:py-1 ">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                    <h1 class="text-center font-poppins font-medium text-4xl">Password Baru</h1>
                </div>
                <div class="mt-3">
                    <p class="text-center font-poppins font-thin  text-gray-400">Masukkan password baru yang akan kamu gunakan ya</p>
                </div>
                <div>
                    <form action="#" method="POST">
                        <form class="space-y-6" action="#" method="POST">
                            <div>
                                <div class="mt-2 relative" x-data="{ showPassword: false }">
                                    <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                        placeholder="Masukkan password baru" autocomplete="current-password" required
                                        class="block font-poppins rounded-md font-extralight w-full flex-1 bg-white  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6 pl-10">
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
                                <div class="mt-4 relative" x-data="{ showPassword: false }">
                                    <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                        placeholder="Konfirmasi password baru" autocomplete="current-password" required
                                        class="block font-poppins rounded-md font-extralight w-full flex-1 bg-white  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6 pl-10">
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
                                    class="flex w-full h-10 justify-center mt-4 text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Kirim</button>
                            </div>      
                        </form>
                    </form>                    
                </div>
            </div>
        </div>
    </main>
    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
</x-layout>

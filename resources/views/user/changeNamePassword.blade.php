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
    <main class="pt-24 " ">
        <div class="mx-auto pb-20">
            <div class="w-auto h-60 bg-gradient-to-t from-gray-500 to-gray-300 flex flex-col items-center justify-center">
                <img src="{{ asset('images/circleSetting.png') }}" alt="">
                <p class="font-poppins font-thin text-[#F6F6F6]">@xavxav</p>
                <h1 class="font-poppins font-semibold text-[#F6F6F6]">Xaviera Valentino Rossi</h1>
            </div>
            <div class="bg-gray-200 ">
                <p class="font-poppins font-semibold text-base text-gray-500 ms-4 pt-5 pb-2">Ganti Nama & Username</p>
                <div class="bg-gray-100">
                    <form action="">
                        <div class="flex">
                            <div
                                class="p-3 text-gray-400 font-poppins border-b-0 w-12 text-center bg-white border-gray-600 font-thin    focus:text-[#3d3d3d]">
                                <img src="{{ asset('images/user.svg') }}" alt="">
                            </div>
                            <input type="text" name="" placeholder="Tulis judul makanan"
                                class="p-3 text-gray-400  font-poppins font-thin w-full border-l-0 border-t-0 border-r-0 border-b-0 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                        </div>
                        <div class="flex">
                            <div
                                class="p-3 text-gray-400 font-poppins border-b-0 w-12 text-center bg-white border-gray-600 font-thin    focus:text-[#3d3d3d]">
                                <img src="{{ asset('images/@.svg') }}" alt="">
                            </div>
                            <input type="text" name="" placeholder="Tulis judul makanan"
                                class="p-3 text-gray-400  font-poppins font-thin w-full border-l-0 border-t-0 border-r-0 border-b-0 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                        </div>
                        <p class="font-poppins font-semibold text-base text-gray-500 ms-4 pt-5 pb-2">Ganti Kata Sandi</p>
                        <div class="relative" x-data="{ showPassword: false }">
                            <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                placeholder="Kata sandi lama" autocomplete="current-password" required
                                class="block font-poppins font-extralight w-full flex-1 h-12 bg-white border-t-0 border-l-0 border-r-0 border-b-0 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 pl-[58px]">
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
                        <div class="relative" x-data="{ showPassword: false }">
                            <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                placeholder="Kata sandi baru" autocomplete="current-password" required
                                class="block font-poppins font-extralight w-full flex-1 h-12 bg-white border-t-0 border-l-0 border-r-0 border-b-0 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset  focus:ring-black pl-[58px]">
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
                        <div class="w-full flex justify-center">
                            <button type="submit"
                                class="flex w-80 h-12 justify-center items-center text-white bg-[#FBBC05] rounded bg-gradient-to-r  mt-8 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Simpan</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </main>

    <x-footer></x-footer>

</x-layout>

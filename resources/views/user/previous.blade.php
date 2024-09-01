<x-layout>
    <nav class="w-full h-24 bg-gradient-to-r from-[#FD666D] to-[#FBBC05] drop-shadow-sm">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="flex  px-6 lg:px-8 h-16">
            <div class="flex item-center -ms-4 md:ms-0 md:justify-center justify-between w-full">
                <button href="" class="text-white items-center mr-24 flex">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor" F
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.0197 14.5572L18.4447 10.1322C18.6776 9.89804 18.8082 9.58123 18.8082 9.251C18.8082 8.92077 18.6776 8.60395 18.4447 8.36975C18.3285 8.25259 18.1903 8.15959 18.038 8.09613C17.8856 8.03267 17.7223 8 17.5572 8C17.3922 8 17.2289 8.03267 17.0765 8.09613C16.9242 8.15959 16.786 8.25259 16.6697 8.36975L11.3697 13.6697C11.2526 13.786 11.1596 13.9242 11.0961 14.0765C11.0327 14.2289 11 14.3922 11 14.5572C11 14.7223 11.0327 14.8856 11.0961 15.038C11.1596 15.1903 11.2526 15.3285 11.3697 15.4447L16.6697 20.8072C16.7865 20.9231 16.9251 21.0148 17.0774 21.077C17.2297 21.1392 17.3927 21.1707 17.5572 21.1698C17.7218 21.1707 17.8848 21.1392 18.0371 21.077C18.1894 21.0148 18.3279 20.9231 18.4447 20.8072C18.6776 20.573 18.8082 20.2562 18.8082 19.926C18.8082 19.5958 18.6776 19.279 18.4447 19.0447L14.0197 14.5572Z"
                            fill="white" />
                        />
                    </svg>
                    <p class="font-poppins font-normal">Preverensi - 1</p>
                </button>
                <button class="font-poppins font-normal text-white">Lewati</button>
            </div>
        </div>
    </nav>
    <main class="relative z-10">
        <div class="mx-auto mt-10 sm:mt-10 md:mt-2 sm:px-2 lg:px-8 block max-w-sm p-0  ">
            <div class="flex min-h-full flex-col justify-center px-1 sm:py-6 lg:py-1 ">
                <div class="flex items-center md:mt-5">
                    <p class="font-poppins font-thin text-gray-500 text-sm">1 of 3</p>
                    <div class="flex ms-2">
                        <div class="border-t border-2 border-black w-20 "></div>
                        <div class="border-t border-black w-20 ms-2"></div>
                        <div class="border-t border-black w-20 ms-2"></div>
                    </div>
                </div>
                <h1 class="font-poppins font-normal text-xl">Preferensi Makanan Anda</h1>
                <div class="flex justify-around mt-6">
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24 " alt="">
                    </button>
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                </div>
                <div class="flex justify-around mt-6">
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                </div>
                <div class="flex justify-around mt-6">
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                    <button>
                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24" alt="">
                    </button>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full h-10 justify-center mt-10 text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Kirim</button>
                </div> 
            </div>
        </div>
    </main>


    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
</x-layout>

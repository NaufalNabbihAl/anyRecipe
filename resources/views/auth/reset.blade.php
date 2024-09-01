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
            <div class="flex min-h-full flex-col justify-center px-6 lg:px-8 sm:py-6 lg:py-1 ">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                    <h1 class="text-center font-poppins font-medium text-4xl">Reset Password</h1>
                </div>
                <div class="mt-3">
                    <p class="text-center font-poppins font-thin  text-gray-400">Silahkan isi email dahulu ya, kami akan
                        mengirimkan kode OTP</p>
                </div>
                <div>
                    <form action="#" method="POST">
                        <div class="relative mt-6">
                            <input id="email" name="email" type="text" placeholder="Masukkan Email Anda"
                                required
                                class="block font-poppins font-extralight rounded border-2 w-full flex-1 bg-white  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6">
                        </div>
                        <div class="mt-6">
                            <button type="submit"
                                class="flex w-full h-10 justify-center text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
</x-layout>

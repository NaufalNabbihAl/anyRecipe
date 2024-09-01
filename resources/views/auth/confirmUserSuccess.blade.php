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
        <div
            class="mx-auto mt-32 md:mt-2 sm:px-6 lg:px-8 block max-w-sm p-0 ">
            <div class="flex min-h-full flex-col justify-center px-6 lg:px-8 sm:py-6 lg:py-1 ">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm mt-11 flex justify-center">
                    <img src="{{ asset('images/successIcon.svg') }}" alt="DangerIcon">
                </div>
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <h2
                        class="mt-8 text-center text-2xl font-poppins font-semibold leading-9 tracking-tight text-[#3D3D3D]">
                        Berhasil Mendaftar</h2>
                    <p class="text-center font-poppins font-normal ">Silahkan login ke akun yang baru dibuat ya</p>
                </div>
                <div class="mt-5 mb-5 sm:mx-auto sm:w-full sm:max-w-sm ">
                    <div>
                        <a href="{{ route('auth.login') }}"
                            class="flex w-full h-10 justify-center text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
</x-layout>

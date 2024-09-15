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
                    <p class="font-poppins font-normal">Atur Akun </p>
                </a>
            </div>
        </div>
    </nav>
    <main class="pt-24 " ">
        <div class="mx-auto pb-20">
            <div class="w-auto h-60 bg-gradient-to-t from-gray-500 to-gray-300 flex flex-col items-center justify-center">
                <img src="{{ asset('images/circleSetting.png') }}" alt="">
                <p class="font-poppins font-thin text-[#F6F6F6] ">@ {{ $user->name }}</p>
                <h1 class="font-poppins font-semibold text-[#F6F6F6]">{{ $user->name }}</h1>
            </div>
            <div class="bg-[#3D3D3D] flex justify-between px-5">
                <p class="font-medium font-poppins text-lg text-white  py-4">
                    1 Bulan Berlangganan
                </p>
                <img src="{{ asset('images/premium.svg') }}" alt="">
            </div>
            <div class="bg-gray-200 ">
                <p class="font-poppins font-medium text-base text-gray-500 ms-4 pt-5 pb-2">Akun & Pembayaran</p>
                <div class="bg-gray-100">
                    <a href="{{ route('user.changeNamePassword') }}" class="flex px-5 py-2 items-center justify-between">
                        <div class="flex py-3">
                            <img src="{{ asset('images/lock2.svg') }}" alt="">
                            <p class="font-poppins font-medium text-lg ps-5">Akun & Keamanan</p>
                        </div>
                        <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d=" m8.25 4.5 7.5 7.5-7.5 7.5" />
    </svg>
    </div>
    </a>
    <a href=#" class="flex px-5 py-2 items-center justify-between">
        <div class="flex py-3">
            <img src="{{ asset('images/payment.svg') }}" alt="">
            <p class="font-poppins font-medium text-lg ps-5">Pilihan Pembayaran</p>
        </div>
        <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </a>
    <a href=#" class="flex px-5 py-2 items-center justify-between">
        <div class="flex py-3">
            <img src="{{ asset('images/bookmark2.svg') }}" alt="">
            <p class="font-poppins font-medium text-lg ps-5">Artikel Tersimpan</p>
        </div>
        <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </a>
    </div>
    <p class="font-poppins font-medium text-base text-gray-500 ms-4 pt-5 pb-2">Pertanyaan & Bantuan</p>
    <div class="bg-gray-100">
        <a href=#" class="flex px-5 py-2 items-center justify-between">
            <div class="flex py-3">
                <img src="{{ asset('images/faq.svg') }}" alt="">
                <p class="font-poppins font-medium text-lg ps-5">Pertanyaan Umum</p>
            </div>
            <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
        <a href=#" class="flex px-5 py-2 items-center justify-between">
            <div class="flex py-3">
                <img src="{{ asset('images/consultation.svg') }}" alt="">
                <p class="font-poppins font-medium text-lg ps-5">Bantuan</p>
            </div>
            <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
        <a href=#" class="flex px-5 py-2 items-center justify-between">
            <div class="flex py-3">
                <img src="{{ asset('images/lock3.svg') }}" alt="">
                <p class="font-poppins font-medium text-lg ps-5">Kebijakan Privasi</p>
            </div>
            <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
        <a href=#" class="flex px-5 py-2 items-center justify-between">
            <div class="flex py-3">
                <img src="{{ asset('images/info.svg') }}" alt="">
                <p class="font-poppins font-medium text-lg ps-5">Tentang Kita</p>
            </div>
            <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
    </div>
    <p class="font-poppins font-medium text-base text-gray-500 ms-4 pt-5 pb-2">Akun & Pembayaran</p>
    <div class="bg-gray-100">
        <a href="{{ route('auth.logout') }}" class="flex px-5 py-2 items-center justify-between">
            <div class="flex py-3">
                <img src="{{ asset('images/logout.svg') }}" alt="">
                <p class="font-poppins font-medium text-lg ps-5">Keluar Akun</p>
            </div>
            <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
        <form action="{{ route('user.deleteUser', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="flex px-5 py-2 items-center justify-between w-full">
                <div class="flex py-3">
                    <img src="{{ asset('images/trash.svg') }}" alt="">
                    <p class="font-poppins font-medium text-lg ps-5">Hapus Akun</p>
                </div>
                <div class="rounded-full bg-gray-200 w-4 h-4 flex items-center justify-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </button>
        </form>
    </div>
    </main>
    <x-footer></x-footer>
</x-layout>

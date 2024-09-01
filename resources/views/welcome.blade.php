<x-layout>
    <main>
        <div class="flex flex-col">
            <img src="{{ asset('images/welcome.svg') }}" class="w-auto" alt="">
            <div class="absolute top-[330px] left-[88px] xs:left-[120px] xs:top-[380px] sm:left-[140px] sm:top-[450px]">
                <img src="{{ asset('images/welcome2.svg') }}" class="w-4/5 " alt="">
            </div>
            <div class="flex justify-center mt-20 xs:mt-16 ">
                <p class="font-aldo font-medium text-5xl ">AnyRecipe</p>
            </div>
            <div class="flex justify-center">
                <p class="font-poppins font-medium">ApapunBisaDimasak</p>
            </div>
            <div>
                <a href="{{ route('auth.login')}}" class="flex items-center justify-center text-white bg-[#FBBC05] mx-16 mt-5 rounded-md h-8 ">Lanjutkan</a>
            </div>
            <div class="flex justify-center mt-3">
                <p class="font-poppins font-thin text-sm text-gray-400">Sudah punya akun? </p>
                <a href="{{ route('auth.login') }}" class="font-poppins font-medium ms-2 text-sm">Masuk</a>
            </div>
        </div>
    </main>
</x-layout>

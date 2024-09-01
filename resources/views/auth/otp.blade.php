<x-layout>
    <nav class="w-full h-24 bg-white drop-shadow-sm">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="flex items-center px-6 lg:px-8 h-16">
            <div class="flex -ms-16 lg:-ms-16 justify-center w-full">
                <a href="{{ route('auth.reset') }}" class="mt-1 mr-24">
                    <img src="{{ asset('images/l-arrow.svg') }}" alt="">
                </a>
                <h1 class="font-aldo space-x-1 font-black text-3xl text-[#3D3D3D]">AnyRecipe</h1>
            </div>
        </div>
    </nav>
    <main class="relative z-10">
        <div class="mx-auto mt-60 md:mt-14 sm:px-6 lg:px-1 max-w-sm block px-4 ">
            <div class="flex min-h-full flex-col justify-center px-6 lg:px-10 sm:py-6 lg:py-1 ">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                    <h1 class="text-center font-poppins font-medium text-4xl">Kode OTP</h1>
                </div>
                <div>
                    <p class="text-center font-poppins font-thin  text-gray-400">Masukkan kode OTP yang ada di email kamu di bawah ini</p>
                </div>
                <div>
                    <form action="#" method="POST">
                        <div class="flex justify-evenly  mt-6">
                            <input id="otp1" name="1" maxlength="1"  type="number" required
                            oninput="moveFocus(this, 'otp2')" onkeydown="moveFocusBack(event, 'otp1')" class="block text-center font-poppins font-extralight hover:bg-gray-100 rounded border-2 w-11  bg-white  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6">
                            <input id="otp2" name="1" maxlength="1" type="number" required
                            oninput="moveFocus(this, 'otp3')" onkeydown="moveFocusBack(event, 'otp1')"    class="block text-center font-poppins font-extralight hover:bg-gray-100 rounded border-2 w-11  bg-white  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6">
                            <input id="otp3" name="1" maxlength="1" type="number" required
                            oninput="moveFocus(this, 'otp4')" onkeydown="moveFocusBack(event, 'otp2')"    class="block text-center font-poppins font-extralight hover:bg-gray-100 rounded border-2 w-11  bg-white  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6">
                            <input id="otp4" name="1" maxlength="1" type="number" required
                            onkeydown="moveFocusBack(event, 'otp3')"    class="block font-poppins text-center font-extralight rounded border-2 w-11  bg-white hover:bg-gray-100  py-1.5 text-gray-500 shadow-sm  placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-gray-100 sm:text-sm sm:leading-6">
                        </div>
                        <div class="mt-6">
                            <button type="submit"
                                class="flex w-full h-10 justify-center text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="flex justify-between mt-3">
                    <a href="{{ route('auth.reset') }}" class="font-poppins font-medium">Ganti email</a>
                    <p class="text-gray-600">00:53</p>
                </div>
                <div class="mt-5 flex justify-end">
                    <form action="">
                        <button class="text-black font-poppins font-medium">Kirim ulang kode?</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
    <script>
        function moveFocus(current, nextId) {
            if (current.value.length >= current.maxLength) {
                current.setAttribute('disabled', true); // Menambahkan atribut disable
                const nextInput = document.getElementById(nextId);
                if (nextInput) {
                    nextInput.focus();
                }
            }
        }

        function moveFocusBack(event, previousId) {
            if (event.key === 'Backspace' && event.target.value === '') {
                const previousInput = document.getElementById(previousId);
                if (previousInput) {
                    previousInput.removeAttribute('disabled'); // Menghapus atribut disabled
                    previousInput.focus();
                }
            }
        }
    </script>
</x-layout>

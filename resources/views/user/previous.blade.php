<x-layout>
    <div x-data="{ currentStep: 1, selectedPenting: null, selectedFood: null, selectedIngredient: null }">
        <nav class="w-full h-24 bg-gradient-to-r from-[#FD666D] to-[#FBBC05] drop-shadow-sm">
            <div class="w-full h-8 bg-[#FBBC05]"></div>
            <div class="flex px-6 lg:px-8 h-16">
                <div class="flex item-center -ms-4 md:ms-0 md:justify-center justify-between w-full">
                    <button type="button" class="text-white items-center mr-24 flex selected-button" data-step="1"
                        x-on:click="currentStep = currentStep > 1 ? currentStep - 1 : 1">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.0197 14.5572L18.4447 10.1322C18.6776 9.89804 18.8082 9.58123 18.8082 9.251C18.8082 8.92077 18.6776 8.60395 18.4447 8.36975C18.3285 8.25259 18.1903 8.15959 18.038 8.09613C17.8856 8.03267 17.7223 8 17.5572 8C17.3922 8 17.2289 8.03267 17.0765 8.09613C16.9242 8.15959 16.786 8.25259 16.6697 8.36975L11.3697 13.6697C11.2526 13.786 11.1596 13.9242 11.0961 14.0765C11.0327 14.2289 11 14.3922 11 14.5572C11 14.7223 11.0327 14.8856 11.0961 15.038C11.1596 15.1903 11.2526 15.3285 11.3697 15.4447L16.6697 20.8072C16.7865 20.9231 16.9251 21.0148 17.0774 21.077C17.2297 21.1392 17.3927 21.1707 17.5572 21.1698C17.7218 21.1707 17.8848 21.1392 18.0371 21.077C18.1894 21.0148 18.3279 20.9231 18.4447 20.8072C18.6776 20.573 18.8082 20.2562 18.8082 19.926C18.8082 19.5958 18.6776 19.279 18.4447 19.0447L14.0197 14.5572Z"
                                fill="white" />
                        </svg>
                        <p class="font-poppins font-normal hidden lg:inline" x-text="`Preverensi - ${currentStep}`"></p>
                    </button>

                    <button type="button" class="font-poppins font-normal text-white"
                        x-on:click="currentStep = 3">Lewati
                    </button>
                </div>
            </div>
        </nav>
        <main class="relative z-10 ">
            <form x-data="{ selectedPenting: null, selectedFood: null, selectedIngredient: null }"  action="{{ route('user.previousStore') }}"
                method="POST">
                @csrf
                <input type="hidden" name="food" x-bind:value="selectedFood" />
                <input type="hidden" name="ingredients" x-bind:value="selectedIngredient" />
                <input type="hidden" name="penting" x-bind:value="selectedPenting" />
                <div class="step-content" x-show="currentStep == 1" x-transition>
                    <div class="mx-auto mt-10 sm:mt-10 md:mt-2 sm:px-2 lg:px-8  max-w-sm p-0 ">
                        <div class="flex min-h-full flex-col justify-center px-1 sm:py-6 lg:py-1 ">
                            <div class="flex items-center md:mt-5">
                                <p class="font-poppins font-thin text-gray-500 text-sm">1 of 3</p>
                                <div class="flex ms-2">
                                    <div class="border-t border-2 border-black w-20 "></div>
                                    <div class="border-t border-black w-20 ms-2"></div>
                                    <div class="border-t border-black w-20 ms-2"></div>
                                </div>
                            </div>
                            <h1 class="font-poppins font-medium text-2xl">Preferensi Makanan Anda</h1>
                            <div class="grid grid-cols-3 gap-4 mt-6">
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Chinese', 'border-2': selectedFood === 'Chinese' }">
                                    <input type="radio" name="food" value="Chinese" class="hidden peer" 
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/chineseFood.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Chinese</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'India', 'border-2': selectedFood === 'India' }">
                                    <input type="radio" name="food" value="India" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/indiaFood.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">India</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Jawa', 'border-2': selectedFood === 'Jawa' }">
                                    <input type="radio" name="food" value="Jawa" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/jawa.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Jawa</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Batak', 'border-2': selectedFood === 'Batak' }">
                                    <input type="radio" name="food" value="Batak" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/batak.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Batak</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Padang', 'border-2': selectedFood === 'Padang' }">
                                    <input type="radio" name="food" value="Padang" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/padang.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Padang</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Manado', 'border-2': selectedFood === 'Manado' }">
                                    <input type="radio" name="food" value="Manado" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/manado.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Manado</p>
                                    </div>
                                </label>
                                <label class="food-label">
                                    <input type="radio" name="food" value="Madura" class="hidden peer"
                                        x-model="selectedFood">
                                    <div class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]"
                                        :class="{ 'selected-button': selectedFood === 'Madura', 'border-2': selectedFood === 'Madura' }">
                                        <img src="{{ asset('images/food/madura.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Madura</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Thai', 'border-2': selectedFood === 'Thai' }">
                                    <input type="radio" name="food" value="Thai" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/thai.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Thai</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedFood === 'Chinese2', 'border-2': selectedFood === 'Chinese2' }">
                                    <input type="radio" name="food" value="Chinese" class="hidden peer"
                                        x-model="selectedFood">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/chinese2.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Chinese</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <button type="button"
                                    class="flex w-full h-10 justify-center mt-10 text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 next-step"
                                    x-on:click="currentStep = 2">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-content" x-show="currentStep == 2" x-transition>
                    <div class="mx-auto mt-10 sm:mt-10 md:mt-2 sm:px-2 lg:px-8  max-w-sm p-0 ">
                        <div class="flex min-h-full flex-col justify-center px-1 sm:py-6 lg:py-1 ">
                            <div class="flex items-center md:mt-5">
                                <p class="font-poppins font-thin text-gray-500 text-sm">2 of 3</p>
                                <div class="flex ms-2">
                                    <div class="border-t  border-black w-20 "></div>
                                    <div class="border-t border-2 border-black w-20 ms-2"></div>
                                    <div class="border-t border-black w-20 ms-2"></div>
                                </div>
                            </div>
                            <h1 class="font-poppins font-medium text-2xl">Bahan yang anda hindari</h1>
                            <div class="grid grid-cols-3 gap-4 mt-6">
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'cabai', 'border-2': selectedIngredient === 'cabai' }">
                                    <input type="radio" name="ingredients" value="cabai" class="hidden peer"
                                         x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/cabai.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Cabai</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'gula', 'border-2': selectedIngredient === 'gula' }">
                                    <input type="radio" name="ingredients" value="gula" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/gula.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Gula</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'garam', 'border-2': selectedIngredient === 'garam' }">
                                    <input type="radio" name="ingredients" value="garam" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/garam.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Garam</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'seafood', 'border-2': selectedIngredient === 'seafood' }">
                                    <input type="radio" name="ingredients" value="seafood" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/seafood.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Seafood</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'ayam', 'border-2': selectedIngredient === 'ayam' }">
                                    <input type="radio" name="ingredients" value="ayam" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/ayam.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Ayam</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'telur', 'border-2': selectedIngredient === 'telur' }">
                                    <input type="radio" name="ingredients" value="telur" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/telur.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Telur</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'ikan', 'border-2': selectedIngredient === 'ikan' }">
                                    <input type="radio" name="ingredients" value="ikan" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/ikan.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Ikan</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'babi', 'border-2': selectedIngredient === 'babi' }">
                                    <input type="radio" name="ingredients" value="babi" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/babi.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Babi</p>
                                    </div>
                                </label>
                                <label class="food-label"
                                    :class="{ 'selected-button': selectedIngredient === 'minyak', 'border-2': selectedIngredient === 'minyak' }">
                                    <input type="radio" name="ingredients" value="minyak" class="hidden peer"
                                        x-model="selectedIngredient">
                                    <div
                                        class="flex flex-col items-center food-button p-4 rounded-lg border border-[#FBBC05]">
                                        <img src="{{ asset('images/food/minyak.svg') }}" class="w-28 md:w-24 mb-2"
                                            alt="">
                                        <p class="font-poppins font-normal text-sm text-center">Minyak</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <button type="button"
                                    class="flex w-full h-10 justify-center mt-10 text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 py-2 font-poppins font-normal leading-6 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 next-step"
                                    x-on:click="currentStep = 3">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-content" x-show="currentStep == 3" x-transition>
                    <div class="mx-auto mt-10 sm:mt-10 md:mt-2 sm:px-2 lg:px-8 max-w-sm p-0">
                        <div class="flex min-h-full flex-col justify-center px-1 sm:py-6 lg:py-1">
                            <div class="flex items-center md:mt-5">
                                <p class="font-poppins font-thin text-gray-500 text-sm">3 of 3</p>
                                <div class="flex ms-2">
                                    <div class="border-t border-black w-20"></div>
                                    <div class="border-t border-black w-20 ms-2"></div>
                                    <div class="border-t border-2 border-black w-20 ms-2"></div>
                                </div>
                            </div>
                            <h1 class="font-poppins font-medium text-lg">Hal yang penting ketika memasak</h1>
                            <div>
                                <input type="radio" id="mudah" name="penting" value="mudah"
                                    class="hidden peer" x-model="selectedPenting" >
                                <label for="mudah"
                                    class="w-full h-11 border mt-4 border-[#3d3d3d] rounded-lg flex items-center pl-3 food-button"
                                    :class="{ 'border-black border-2': selectedPenting === 'mudah' }">
                                    <p class="text-left">Mudah</p>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="rasa" name="penting" value="rasa"
                                    class="hidden peer" x-model="selectedPenting">
                                <label for="rasa"
                                    class="w-full h-11 border mt-3 border-[#3d3d3d] rounded-lg flex items-center pl-3 food-button"
                                    :class="{ 'border-black border-2': selectedPenting === 'rasa' }">
                                    <p class="text-left">Rasa</p>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="sehat" name="penting" value="sehat"
                                    class="hidden peer" x-model="selectedPenting">
                                <label for="sehat"
                                    class="w-full h-11 border border-[#3d3d3d] mt-3 rounded-lg flex items-center pl-3 food-button"
                                    :class="{ 'border-black border-2': selectedPenting === 'sehat' }">
                                    <p class="text-left">Sehat</p>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="waktu" name="penting" value="waktu"
                                    class="hidden peer" x-model="selectedPenting">
                                <label for="waktu"
                                    class="w-full h-11 border border-[#3d3d3d] mt-3 rounded-lg flex items-center pl-3 food-button"
                                    :class="{ 'border-black border-2': selectedPenting === 'waktu' }">
                                    <p class="text-left">Waktu</p>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="porsi" name="penting" value="porsi"
                                    class="hidden peer" x-model="selectedPenting">
                                <label for="porsi"
                                    class="w-full h-11 border border-[#3d3d3d] mt-3 rounded-lg flex items-center pl-3 food-button"
                                    :class="{ 'border-black border-2': selectedPenting === 'porsi' }">
                                    <p class="text-left">Porsi</p>
                                </label>
                            </div>
                            <div>
                                <button type="submit"
                                    class="flex w-full h-10 justify-center mt-10
                                     text-white bg-[#FBBC05] rounded bg-gradient-to-r px-4 
                                     py-2 font-poppins font-normal leading-6 shadow-sm focus-visible:outline 
                                     focus-visible:outline-2 focus-visible:outline-offset-2">Kirim
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
    <div class="absolute bottom-0 md:top-[450px] left-0 w-full z-0">
        <img src="{{ asset('images/footer.png') }}" class="top-0 w-full" alt="">
    </div>
</x-layout>

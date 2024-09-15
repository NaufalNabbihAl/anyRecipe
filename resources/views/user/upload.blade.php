<x-layout>
    <nav class="w-full h-24 bg-gradient-to-r from-[#FD666D] to-[#FBBC05] drop-shadow-sm fixed z-10">
        <div class="w-full h-8 bg-[#FBBC05]"></div>
        <div class="flex px-6 lg:px-8 h-16">
            <div class="flex item-center -ms-4 md:ms-0 md:justify-center justify-between w-full">
                <a href="" class="text-white items-center mr-24 flex">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.0197 14.5572L18.4447 10.1322C18.6776 9.89804 18.8082 9.58123 18.8082 9.251C18.8082 8.92077 18.6776 8.60395 18.4447 8.36975C18.3285 8.25259 18.1903 8.15959 18.038 8.09613C17.8856 8.03267 17.7223 8 17.5572 8C17.3922 8 17.2289 8.03267 17.0765 8.09613C16.9242 8.15959 16.786 8.25259 16.6697 8.36975L11.3697 13.6697C11.2526 13.786 11.1596 13.9242 11.0961 14.0765C11.0327 14.2289 11 14.3922 11 14.5572C11 14.7223 11.0327 14.8856 11.0961 15.038C11.1596 15.1903 11.2526 15.3285 11.3697 15.4447L16.6697 20.8072C16.7865 20.9231 16.9251 21.0148 17.0774 21.077C17.2297 21.1392 17.3927 21.1707 17.5572 21.1698C17.7218 21.1707 17.8848 21.1392 18.0371 21.077C18.1894 21.0148 18.3279 20.9231 18.4447 20.8072C18.6776 20.573 18.8082 20.2562 18.8082 19.926C18.8082 19.5958 18.6776 19.279 18.4447 19.0447L14.0197 14.5572Z"
                            fill="white" />
                    </svg>
                    <p class="font-poppins font-normal">Tambah Resep</p>
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-24" x-data="{
        activeTab: 'tentang',
        bahanCount: 1,
        langkahCount: 1,
        imageUrl: null
    }">
        <div class="mx-auto pb-20">
            <div class="w-auto h-40 bg-gradient-to-t from-gray-500 to-gray-300 flex items-center">
                <p class="font-poppins font-normal text-2xl ms-4 text-white" x-show="activeTab === 'tentang'">Tentang
                    Masakan</p>
                <p class="font-poppins font-normal text-2xl ms-4 text-white" x-show="activeTab === 'bahan'">Bahan dan
                    Alat Masak</p>
                <p class="font-poppins font-normal text-2xl ms-4 text-white" x-show="activeTab === 'langkah'">Langkah
                    Langkah Memasak</p>
            </div>


            @if ($errors->any())
                <div class="bg-red-500 text-white p-3 text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="w-auto flex">
                <button @click="activeTab = 'tentang'"
                    :class="activeTab === 'tentang' ? 'bg-[#FBBC05]' : 'bg-gray-600'"
                    class="flex flex-grow items-center justify-center">
                    <p class="font-poppins font-light text-white px-5 py-2">Tentang</p>
                </button>
                <button @click="activeTab = 'bahan'" :class="activeTab === 'bahan' ? 'bg-[#FBBC05]' : 'bg-gray-600'"
                    class="flex flex-grow items-center justify-center border-l border-white">
                    <p class="font-poppins font-light text-white px-5 py-1 ms-2">Bahan</p>
                </button>
                <button @click="activeTab = 'langkah'"
                    :class="activeTab === 'langkah' ? 'bg-[#FBBC05]' : 'bg-gray-600'"
                    class="flex flex-grow items-center justify-center border-l border-white">
                    <p class="font-poppins font-light text-white px-5 py-2">Langkah</p>
                </button>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" class="mx-3">
                @csrf
                <div class="mt-5 mx-3 w-auto flex flex-col" x-show="activeTab === 'tentang'">
                    <input type="text" name="name" placeholder="Tulis judul makanan"
                        class="p-3 text-gray-400 font-poppins font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                    <div class="flex mt-3 items-center justify-center w-full">
                        <label
                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-400 rounded-lg cursor-pointer"
                            x-on:dragover.prevent
                            x-on:drop.prevent="
                                imageUrl = null;
                                const file = $event.dataTransfer.files[0];
                                if (!file.type.startsWith('image/')) return;
                                const reader = new FileReader();
                                reader.onload = (e) => imageUrl = e.target.result;
                                reader.readAsDataURL(file);
                            ">
                            <template x-if="!imageUrl">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <div class="rounded-full border-1">
                                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="mb-2 text-sm text-gray-500">
                                        <span class="f">Tambah Gambar</span>
                                    </p>
                                </div>
                            </template>
                            <template x-if="imageUrl">
                                <img :src="imageUrl" alt="Uploaded Image"
                                    class="h-full w-full object-cover rounded-lg">
                            </template>
                            <input type="file" name="image" class="hidden"
                                x-on:change="
                                imageUrl = null;
                                const file = $event.target.files[0];
                                if (!file.type.startsWith('image/')) return;
                                const reader = new FileReader();
                                reader.onload = (e) => imageUrl = e.target.result;
                                reader.readAsDataURL(file);
                            " />
                        </label>
                    </div>

                    <textarea placeholder="Deskripsi tulis disini ya" name="description"
                        class="p-3 text-gray-400 font-poppins mt-3 font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]"></textarea>
                    <label for="waktuMasak" class="font-poppins font-">Waktu Masak</label>
                    <div class="w-auto flex justify-between">
                        <input type="number" placeholder="hours" name="hours"
                            class="p-2 font-poppins font-thin rounded-md flex-1 flex-grow focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] w-20">
                        <input type="number" placeholder="minutes" name="minutes"
                            class="p-2 font-poppins font-thin rounded-md flex-1 flex-grow focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] w-20 ms-2">
                        <input type="number" placeholder="seconds" name="seconds"
                            class="p-2 font-poppins font-thin rounded-md flex-1 flex-grow focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] w-20 ms-2">
                    </div>
                    <div class="flex">
                        <input type="number" name="" placeholder="Kalori "
                            class="p-3 mt-3 text-gray-400 font-poppins font-thin rounded-md w-1/2 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d] mr-2">
                        <select name="category"
                            class="p-3 mt-3 text-gray-400 font-poppins font-thin rounded-md w-1/2 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mx-3" x-show="activeTab === 'bahan'">
                    <template x-for="i in bahanCount" :key="i">
                        <div class="flex mt-4">
                            <div
                                class="p-3 text-gray-400 font-poppins border w-12 text-center border-gray-600 font-thin rounded-md focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                                <p class="font-poppins" x-text="i"></p>
                            </div>
                            <select name="ingredients[]"
                                class="p-3 text-gray-400 ms-2 font-poppins font-thin rounded-md w-full focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                                @foreach ($ingredients as $ingredient)
                                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="quantity[]" placeholder="Jumlah"
                                class="p-3 text-gray-400 ms-2 font-poppins font-thin rounded-md w-20 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                        </div>
                    </template>

                    <button class="flex items-center mt-4" type="button" @click="bahanCount++">
                        <svg aria-hidden="true" class="w-7 h-7 mb-3 rounded-full bg-gray-200 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                        <p class="font-poppins font-normal text-xl ms-3">Tambahkan Bahan</p>
                    </button>
                </div>
                <div class="mx-3" x-show="activeTab === 'langkah'">
                    <template x-for="i in langkahCount" :key="i">
                        <div class="flex mt-4">
                            <div
                                class="p-3 text-gray-400 font-poppins border-b-2 w-12 text-center bg-white border-gray-600 font-thin focus:text-[#3d3d3d]">
                                <p class="font-poppins" x-text="i + '.'"></p>
                            </div>
                            <input type="text" name="steps[]" placeholder="Tulis langkah memasak"
                                class="p-3 text-gray-400 font-poppins font-thin w-full border-l-0 border-t-0 border-r-0 border-b-2 focus:ring-gray-500 focus:outline-1 focus:border-gray-500 focus:text-[#3d3d3d]">
                        </div>
                    </template>
                    <button class="flex items-center mt-4" type="button" @click="langkahCount++">
                        <svg aria-hidden="true" class="w-7 h-7 mb-3 rounded-full bg-gray-200 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                        <p class="font-poppins font-normal text-xl ms-3">Tambahkan Langkah</p>
                    </button>
                </div>
                <div class="mt-3 flex m-3 justify-end">
                    <button type="submit"
                        class="bg-[#FBBC05] rounded-md p-2 text-white font-poppins font-thin">Simpan</button>
                </div>
            </form>
        </div>
    </main>
    <x-footer></x-footer>
</x-layout>

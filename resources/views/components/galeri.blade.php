<section id="galeri" class="relative mt-20 py-10 rounded-lg">
    <h1 class="text-center text-4xl font-bold">Galeri</h1>
    <div class="w-full grid grid-cols-2 lg:grid-cols-8 gap-3 h-2/4 overflow-hidden mt-7">
        <div class="w-full  lg:row-span-2 lg:col-span-2 h-full aspect-square rounded-lg overflow-hidden relative">
            <img src="{{ asset('image/tamansiswa-jkt/lomba6.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2"
                alt="">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Lomba</h1>
                <p class="text-xl">Juara 3 TBSM</p>
            </div>
        </div>
        <div class="w-full lg:col-span-2 h-full aspect-square rounded-lg relative overflow-hidden">
            <img src="{{ asset('image/tamansiswa-jkt/kegiatan8.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2"
                alt="">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Kegiatan</h1>
                <p class="text-xl">Lorem, ipsum dolor.</p>
            </div>
        </div>
        <div class="w-full lg:h-[27rem] lg:row-span-1 lg:col-span-4 aspect-square rounded-lg relative overflow-hidden">
            <img src="{{ asset('image/tamansiswa-jkt/kegiatan22.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Kegiatan</h1>
                <p class="text-xl">Lorem, ipsum dolor.</p>
            </div>
        </div>
        <div class="w-full h-full lg:col-span-3 aspect-square rounded-lg relative overflow-hidden">
            <img src="{{ asset('image/tamansiswa-jkt/lomba12.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2"
                alt="">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Lomba</h1>
                <p class="text-xl">Juara 1 Tari</p>
            </div>
        </div>
        <div class="w-full lg:col-span-3 lg:row-span-2 h-full aspect-square rounded-lg relative overflow-hidden">
            <img src="{{ asset('image/tamansiswa-jkt/lomba8.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Juara</h1>
                <p class="text-xl">Lorem ipsum dolor sit.</p>
            </div>
        </div>
        <div class="w-full h-full lg:col-span-2 aspect-square rounded-lg relative overflow-hidden">
            <img src="{{ asset('image/tamansiswa-jkt/kegiatan23.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2"
                alt="">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Kegiatan</h1>
                <p class="text-xl">Lorem ipsum dolor sit.</p>
            </div>
        </div>
        <div class="w-full lg:w-full col-span-2 lg:col-span-3 h-full aspect-square rounded-lg relative overflow-hidden">
            <img src="{{ asset('image/tamansiswa-jkt/lomba9.jpg') }}"
                class="bg-cover w-full h-full rounded-lg object-cover transition duration-300 ease-in-out hover:scale-125 hover:rotate-2">
            <div
                class="absolute bottom-0 left-0 text-white border border-yellow-300/60 ring-2 ring-yellow-300/60 bg-black/40 rounded-e-full w-full py-2 px-4">
                <h1 class="font-bold text-2xl">Lomba</h1>
                <p class="text-xl">Juara 1</p>
            </div>
        </div>
    </div>
    <a href="{{ route('galeri') }}">
        <button class="block mx-auto mt-4 bg-[#FEDA0A] text-black font-semibold py-2 px-4 rounded-full">Lihat
            semua</button>
    </a>
</section>

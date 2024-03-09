<x-app-layout>
    <x-button-back />
    <section class="relative w-full h-screen overflow-hidden">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiperGaleri">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <img src="{{ asset('image/tamansiswa-jkt/kegiatan22.jpg') }}"
                        class="w-full max-h-[100%] object-cover h-[40rem] brightness-50" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/tamansiswa-jkt/lomba12.jpg') }}"
                        class="w-full max-h-[100%] object-cover h-[40rem]  brightness-75" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/tamansiswa-jkt/kegiatan23.jpg') }}"
                        class="w-full max-h-[100%] object-cover h-[40rem]  brightness-75 " alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="w-5/6 absolute top-2/4 -translate-y-2/4 left-2/4 -translate-x-2/4 z-40">
            <h1 class="text-center font-semibold text-2xl lg:text-6xl tracking-wide text-white/90 ">
                Galeri Yayasan
                Tamansiswa
            </h1>
            <p class="text-center text-xl lg:text-3xl text-neutral-300 mt-5 tracking-widest">Cabang
                Jakarta</p>
        </div>

    </section>
    <section class="w-full lg:my-4 px-6 lg:py-4 overflow-hidden">
        <h5
            class="relative w-52  font-semibold text-neutral-500 text-xl before:content-[''] before:absolute before:left-16 before:top-3 before:w-44 before:h-[3px] before:bg-green-500">
            Galeri</h5>
        <h1 class="font-serif font-medium mt-3 text-3xl">Yayasan Tamansiswa</h1>
        <x-image-terbaru />
        <x-image-lomba />
        <x-image-kegiatan />
    </section>
</x-app-layout>

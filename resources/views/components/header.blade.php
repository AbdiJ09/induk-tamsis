  <header x-data="{ open: false, open2: false }" class="w-full fixed top-0 left-0 bg-transparent py-4 px-10 z-50">
      <div class="flex justify-between items-center bg-white shadow-lg border rounded-2xl py-2 px-10">
          <div class="flex items-center gap-2">
              <a href="/"><img src="{{ asset('image/logo_tamsis.png') }}" class="w-8 lg:w-10" alt="tamsis"></a>
              <h1 class="text-lg lg:text-xl font-bold font-sans tracking-wide text-gray-700">
                  Tamansiswa
              </h1>

          </div>
          <div class="lg:hidden" @click="open = !open">
              <button>
                  <i class="fa-solid fa-bars text-xl"></i>
              </button>
          </div>
          <nav x-cloak
              :class="open ? 'translate-x-0 opacity-100 transition ease-in-out duration-300' :
                  'translate-x-full opacity-0 transition ease-in-out duration-300'"
              class="absolute top-0 w-3/4 lg:w-auto  right-0  lg:opacity-100 lg:translate-x-0 bg-white h-screen lg:h-auto z-[999999] p-4 lg:p-0 lg:bg-transparent lg:static">
              <button class="flex justify-end w-full mb-5 lg:hidden" @click="open = !open"><i
                      class="fa-solid fa-xmark text-xl"></i></button>
              <ul class="flex items-start lg:items-center justify-center gap-5 flex-col lg:flex-row">
                  <li><a href="#beranda"
                          class="nav-link text-gray-600 font-medium w-52 block lg:w-auto tracking-wide py-2 px-4 lg:p-0  rounded-full"><i
                              class="fa-solid fa-house me-1"></i>
                          Beranda</a></li>
                  <li class="relative"><a href="#tentang" x-on:mouseenter='open2 = true' x-on:mouseleave='open2 = false'
                          class="text-gray-600 nav-link tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full"><i
                              class="fa-solid fa-building me-1"></i>
                          Tentang <i class="fa-solid fa-chevron-down"></i></a>
                      <div x-on:mouseenter='open2 = true' x-on:mouseleave='open2 = false' x-cloak x-show="open2"
                          class="bg-white absolute z-50 w-52 left-0 h-32 rounded-md py-5 px-4 space-y-3">
                          <a href="#visi"
                              class="text-gray-600 tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full">
                              Visi</a>
                          <a href="#misi"
                              class="text-gray-600 tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full">
                              Misi</a>
                          <a href="#tujuan"
                              class="text-gray-600 tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full">
                              Tujuan</a>
                      </div>
                  </li>
                  <li><a href="#struktur-organisasi"
                          class="text-gray-600 nav-link tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full"><i
                              class="fa-solid fa-sitemap me-1"></i> Struktur Organisasi</a></li>
                  <li><a href="#galeri"
                          class="text-gray-600 nav-link tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full"><i
                              class="fa-regular fa-image me-1"></i>
                          Galeri</a></li>
                  <li><a href="#aplikasi"
                          class="text-gray-600 nav-link tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full"><i
                              class="fa-solid fa-grip me-1"></i>
                          Aplikasi</a></li>
                  <li><a href="#quotes"
                          class="text-gray-600 nav-link tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full"><i
                              class="fa-solid fa-quote-left me-1"></i>
                          Quotes</a></li>
                  <li><a href="#kontak"
                          class="text-gray-600 nav-link tracking-wide w-52 lg:w-auto block py-2 px-4 lg:p-0 rounded-full"><i
                              class="fa-solid fa-envelope me-1"></i>
                          Kontak</a></li>
              </ul>
          </nav>
      </div>
  </header>

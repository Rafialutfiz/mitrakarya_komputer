{{-- <div>
    <h1>hello</h1>
</div> --}}

<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <!-- Carousel -->
    <div x-data="carousel()" x-init="init()" class="relative" data-twe-carousel-init data-twe-ride="carousel">
        <!-- Carousel items -->
        <div class="relative w-full overflow-hidden">
            <!-- Container for slides -->
            <div class="flex transition-transform duration-[600ms] ease-in-out">
                <!-- 1 -->
                <div class="w-full flex-shrink-0" x-show="currentIndex === 0">
                    <img src="{{ asset ('img/1.png') }}" class="block w-full" alt="hero 1" />
                </div>
                <!-- 2 -->
                <div class="w-full flex-shrink-0" x-show="currentIndex === 1">
                    <img src="{{ asset ('img/2.png') }}" class="block w-full" alt="hero 2" />
                </div>
                <!-- 3 -->
                <div class="w-full flex-shrink-0" x-show="currentIndex === 2">
                    <img src="{{ asset ('img/3.png') }}" class="block w-full" alt="hero 3" />
                </div>
            </div>
        </div>
  
        <!-- Controls -->
        <div class="absolute inset-0 flex justify-between items-center">
            <button @click="prev()" class="text-white px-4 py-2 rounded-full">
                <i data-feather="chevron-left"></i>
            </button>
            <button @click="next()" class="text-white px-4 py-2 rounded-full">
                <i data-feather="chevron-right"></i>
            </button>
        </div>
    </div>
  
    <script>
        function carousel() {
            return {
                currentIndex: 0,
                items: 3, // Total number of items in the carousel
                init() {
                    setInterval(() => {
                        this.next();
                    }, 2000); // Change image every 2 seconds
                },
                next() {
                    this.currentIndex = (this.currentIndex + 1) % this.items;
                },
                prev() {
                    this.currentIndex = (this.currentIndex - 1 + this.items) % this.items;
                }
            }
        }
    </script>
  
    <style>
        .carousel-container {
            display: flex;
            transition: transform 0.6s ease-in-out;
        }
  
        .carousel-item {
            flex: 0 0 100%;
        }
    </style>
    <!--end Carousel-->
  
    <!--Mid tentang-->
    <div class="w-full h-full px-4 md:px-0">
      <div class="flex flex-col items-center pt-20 md:pt-40 space-y-6">
          <h1 class="font-bold text-center text-4xl md:text-6xl text-[#E8B740]">Mitra Karya</h1>
          <p class="text-xl md:text-3xl text-white font-light text-center md:w-2/4">Mitra Karya menyediakan Layanan jual beli laptop, servis dan maintenance laptop, tukar tambah laptop, menjual laptop baru dan bekas, peripheral, dan sparepart yang berkualitas dan bersaing di pasaran.</p>
          <div class="w-full flex justify-center pt-5 pb-20">
              <a href="/tentang">
                  <button class="tracking-wide py-3 px-6 bg-[#E8B740] text-black text-xl md:text-2xl rounded-full hover:bg-yellow-950 hover:text-white font-bold">Selengkapnya</button>
              </a>
          </div>
      </div>
      <!--grid rekomendasi-->
        <div class="w-full p-4 mx-auto">
            <h1 class="text-[#E8B740] tracking-wide text-4xl md:text-[64px] font-extrabold pl-5 pb-4" x-text="category"></h1>
            <div class="flex flex-wrap gap-6 justify-center">
                <div class="w-full sm:w-80 h-auto">
                    <a href="/productdetail">
                        <div class="rounded-3xl overflow-hidden bg-gray-800">
                            <img src="{{ url('img/rek1.png') }}" alt="produk" class="w-full h-48 object-cover">
                            <div class="px-4 py-4">
                                <div class="text-white text-lg font-extralight">Nama Produk</div>
                                <p class="text-white text-xl font-medium">Harga</p>
                            </div>
                        </div>
                    </a>
                </div>
  
                <div class="w-full sm:w-80 h-auto">
                    <a href="/productdetail">
                        <div class="rounded-3xl overflow-hidden bg-gray-800">
                            <img src="{{ url('img/rek2.png') }}" alt="produk" class="w-full h-48 object-cover">
                            <div class="px-4 py-4">
                                <div class="text-white text-lg font-extralight">Nama Produk</div>
                                <p class="text-white text-xl font-medium">Harga</p>
                            </div>
                        </div>
                    </a>
                </div>
  
                <div class="w-full sm:w-80 h-auto">
                    <a href="/productdetail">
                        <div class="rounded-3xl overflow-hidden bg-gray-800">
                            <img src="{{ url('img/rek3.png') }}" alt="produk" class="w-full h-48 object-cover">
                            <div class="px-4 py-4">
                                <div class="text-white text-lg font-extralight">Nama Produk</div>
                                <p class="text-white text-xl font-medium">Harga</p>
                            </div>
                        </div>
                    </a>
                </div>
  
                <div class="w-full sm:w-80 h-auto">
                    <a href="productdetail">
                        <div class="rounded-3xl overflow-hidden bg-gray-800">
                            <img src="{{ url('img/rek4.png') }}" alt="produk" class="w-full h-48 object-cover">
                            <div class="px-4 py-4">
                                <div class="text-white text-lg font-extralight">Nama Produk</div>
                                <p class="text-white text-xl font-medium">Harga</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!--end grid rekomendasi-->
    </div>
    <!--end Mid tentang-->
    <!--tagline-->
      <div>
          <ul class="pb-32 gap-6 flex flex-col md:flex-row pr-8 pl-8 justify-center">
              <a href="/katalog">
                  <li><img src="{{ url('img/tag1.png') }}" alt=""></li>
              </a>
              <a href="https://api.whatsapp.com/send?phone=+6281330080033&text=Halo" target="_blank">
                  <li><img src="{{ url('img/tag2.png') }}" alt=""></li>
              </a>
              <a href="https://api.whatsapp.com/send?phone=+6281330080033&text=Halo" target="_blank">
                  <li><img src="{{ url('img/tag3.png') }}" alt=""></li>
              </a>
          </ul>
      </div>
  
    <!--end tagline-->
  </x-layout>
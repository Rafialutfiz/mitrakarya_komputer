{{-- <x-layout>
  <body class="bg-black text-white" x-data="{ category: 'Semua' }">
      <div class="flex">
          <!-- Sidebar -->
          <div class="w-1/8 h-96 p-4 bg-gray-900 rounded-lg">
              <h1 class="text-3xl font-bold mb-8 text-white">Kategori</h1>
              <ul class="space-y-4">
                  <li>
                      <a href="#" class="block px-4 py-2 rounded text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                         @click.prevent="category = 'Semua'">Semua</a>
                  </li>
                  <li>
                      <a href="#" class="block px-4 py-2 rounded text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                         @click.prevent="category = 'Laptop Baru'">Laptop Baru</a>
                  </li>
                  <li>
                      <a href="#" class="block px-4 py-2 rounded text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                         @click.prevent="category = 'Laptop Bekas'">Laptop Bekas</a>
                  </li>
                  <li>
                      <a href="#" class="block px-4 py-2 rounded text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                         @click.prevent="category = 'Peripheral'">Peripheral</a>
                  </li>
                  <li>
                      <a href="#" class="block px-4 py-2 rounded text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                         @click.prevent="category = 'Sparepart'">Sparepart</a>
                  </li>
              </ul>
          </div>
          
          <!-- Main Content -->
          <div class="w-3/4 p-4 mx-auto">
              <h1 class="text-[#E8B740] tracking-wide text-[64px] font-extrabold pl-5 pb-4" x-text="category"></h1>
              <div class="flex flex-wrap gap-6 justify-center">
                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
                      <a href="/productdetail">
                          <div class="rounded-3xl overflow-hidden bg-gray-800">
                              <img src="{{ url('img/rek4.png') }}" alt="produk" class="w-full h-48 object-cover">
                              <div class="px-4 py-4">
                                  <div class="text-white text-lg font-extralight">Nama Produk</div>
                                  <p class="text-white text-xl font-medium">Harga</p>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
                      <a href="/productdetail">
                          <div class="rounded-3xl overflow-hidden bg-gray-800">
                              <img src="{{ url('img/rek4.png') }}" alt="produk" class="w-full h-48 object-cover">
                              <div class="px-4 py-4">
                                  <div class="text-white text-lg font-extralight">Nama Produk</div>
                                  <p class="text-white text-xl font-medium">Harga</p>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
                      <a href="/productdetail">
                          <div class="rounded-3xl overflow-hidden bg-gray-800">
                              <img src="{{ url('img/rek4.png') }}" alt="produk" class="w-full h-48 object-cover">
                              <div class="px-4 py-4">
                                  <div class="text-white text-lg font-extralight">Nama Produk</div>
                                  <p class="text-white text-xl font-medium">Harga</p>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
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

                  <div class="w-80 h-80 my-auto">
                      <a href="/productdetail">
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
      </div>
  </body>
</x-layout> --}}

<x-layout>
    <body class="bg-black text-white" x-data="{
        category: 'Semua',
        isOpen: false,
        currentPage: 1,
        itemsPerPage: 8,
        products: [
            { img: '{{ url('img/rek1.png') }}', name: 'Nama Produk 1', price: 'Harga 1' },
            { img: '{{ url('img/rek2.png') }}', name: 'Nama Produk 2', price: 'Harga 2' },
            { img: '{{ url('img/rek3.png') }}', name: 'Nama Produk 3', price: 'Harga 3' },
            { img: '{{ url('img/rek4.png') }}', name: 'Nama Produk 4', price: 'Harga 4' },
            { img: '{{ url('img/rek1.png') }}', name: 'Nama Produk 5', price: 'Harga 5' },
            { img: '{{ url('img/rek2.png') }}', name: 'Nama Produk 6', price: 'Harga 6' },
            { img: '{{ url('img/rek3.png') }}', name: 'Nama Produk 7', price: 'Harga 7' },
            { img: '{{ url('img/rek4.png') }}', name: 'Nama Produk 8', price: 'Harga 8' },
            { img: '{{ url('img/rek1.png') }}', name: 'Nama Produk 9', price: 'Harga 9' },
            { img: '{{ url('img/rek2.png') }}', name: 'Nama Produk 10', price: 'Harga 10' },
            { img: '{{ url('img/rek3.png') }}', name: 'Nama Produk 11', price: 'Harga 11' },
            { img: '{{ url('img/rek4.png') }}', name: 'Nama Produk 12', price: 'Harga 12' }
        ],
        get paginatedProducts() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.products.slice(start, end);
        },
        get totalPages() {
            return Math.ceil(this.products.length / this.itemsPerPage);
        }
    }">
        <div class="flex flex-col lg:flex-row min-h-screen">
            <!-- Sidebar -->
            <div :class="{'block': isOpen, 'hidden': !isOpen}" class="fixed inset-y-0 left-0 z-30 w-64 lg:w-1/6 h-full p-4 bg-gradient-to-b from-gray-800 to-gray-900 shadow-lg rounded-lg lg:block lg:relative lg:inset-0 lg:translate-x-0 transform transition-transform duration-200 ease-in-out">
                <h1 class="text-3xl lg:text-4xl font-bold mb-8 text-yellow-400">Kategori</h1>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="block px-4 py-2 rounded text-white bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                           @click.prevent="category = 'Semua'; isOpen = false">Semua</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded text-white bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                           @click.prevent="category = 'Laptop Baru'; isOpen = false">Laptop Baru</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded text-white bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                           @click.prevent="category = 'Laptop Bekas'; isOpen = false">Laptop Bekas</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded text-white bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                           @click.prevent="category = 'Peripheral'; isOpen = false">Peripheral</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded text-white bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                           @click.prevent="category = 'Sparepart'; isOpen = false">Sparepart</a>
                    </li>
                </ul>
            </div>

            <!-- Overlay for closing sidebar on mobile -->
            <div x-show="isOpen" @click="isOpen = false" class="fixed inset-0 z-20 bg-black opacity-50 lg:hidden"></div>

            <!-- Hamburger Menu for mobile -->
            <div class="p-4 lg:hidden" x-show="!isOpen" x-cloak>
                <button @click="isOpen = !isOpen" class="text-white focus:outline-none hover:bg-gray-700 hover:text-white">
                    <i data-feather="align-justify"></i>
                </button>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-4 mx-auto">
                <h1 class="text-[#E8B740] tracking-wide text-3xl lg:text-[64px] font-extrabold pl-5 pb-6" x-text="category"></h1>
                <div class="flex flex-wrap gap-6 justify-center">
                    <!-- Product Cards -->
                    <template x-for="product in paginatedProducts" :key="product.name">
                        <div class="w-80 h-80 my-auto">
                            <a href="/productdetail">
                                <div class="rounded-3xl overflow-hidden bg-gray-800">
                                    <img :src="product.img" alt="produk" class="w-full h-48 object-cover">
                                    <div class="px-4 py-4">
                                        <div class="text-white text-lg font-extralight" x-text="product.name"></div>
                                        <p class="text-white text-xl font-medium" x-text="product.price"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </template>
                </div>

                <!-- Pagination Controls -->
                <div class="flex justify-center space-x-4 mt-8">
                    <button 
                        @click="if(currentPage > 1) currentPage--"
                        :disabled="currentPage === 1"
                        class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                    >Previous</button>
                    <template x-for="page in totalPages" :key="page">
                        <button 
                            @click="currentPage = page"
                            :class="{'bg-yellow-500 text-gray-900': currentPage === page, 'bg-gray-700 text-white': currentPage !== page}"
                            class="px-4 py-2 rounded hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                        x-text="page"></button>
                    </template>
                    <button 
                        @click="if(currentPage < totalPages) currentPage++"
                        :disabled="currentPage === totalPages"
                        class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-200"
                    >Next</button>
                </div>
            </div>
        </div>
    </body>
</x-layout>

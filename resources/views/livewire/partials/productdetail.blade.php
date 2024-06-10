<x-layout>
<div class="w-full py-10 px-4 sm:px-6 lg:px-8 mx-auto bg-black">
  <section class="overflow-hidden bg-zinc-800 py-11  dark:bg-gray-800">
    <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full mb-8 md:w-1/2 md:mb-0" x-data="{ mainImage: 'https://m.media-amazon.com/images/I/71f5Eu5lJSL._SX679_.jpg' }">
          <div class="sticky top-0  overflow-hidden ">
            <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
              <img x-bind:src="mainImage" alt="" class="object-cover w-full lg:h-full ">
            </div>
            <div class="px-6 pb-6 mt-6  ">
              <div class="flex flex-wrap items-center mt-6">
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 ">
          <div class="lg:pl-20">
            <div class="mb-8 ">
              <h2 class="max-w-xl mb-6 text-2xl font-bold text-white md:text-4xl">
                MacBook Air</h2>
              <p class="inline-block mb-6 text-4xl font-bold  text-white ">
                <span>Rp.</span>
                <span class="inline-block mb-6 text-4xl font-bold  text-white">10.000.000</span>
              </p>
              <p class="max-w-md  text-white">
                Chipset M2 juga didesain dengan fabrikasi 5 nm gen 2 dan memiliki prosesor octa-core dan berbasis pada graphics processing unit (GPU) dengan core lebih banyak, hingga 10 core. Chipset tersebut juga dipasangkan dengan RAM LPDDR5 24GB. Apple sendiri mengklaim bahwa chip M2 dilengkapi dengan mesin pengolah media baru dan ProRes untuk mendukung proses pengeditan video.
              </p>
            </div>
            <div class="w-32 mb-8 ">
              <div class="relative flex flex-row w-full h-10 mt-6 bg-transparent rounded-lg">
              </div>
            </div>
            <div class="flex flex-wrap items-center gap-4">
              <a href="/cart">
              <button class="w-full p-4 pr-24 justify-center bg-blue-500 rounded-md lg:w-2/5 dark:text-gray-200 text-gray-50 hover:bg-blue-600 dark:bg-blue-500 dark:hover:bg-blue-700">
                Tambahkan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</x-layout>
<x-layout>

    <section class="flex items-center font-poppins bg-gray-700 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto bg-white border rounded-md  md:py-10 md:px-10">
          <div>
            <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700  ">
              Terima kasih. Order diterima </h1>
            <div class="flex border-b border-gray-200   items-stretch justify-start w-full h-full px-4 mb-8 md:flex-row xl:flex-col md:space-x-6 lg:space-x-8 xl:space-x-0">
              <div class="flex items-start justify-start flex-shrink-0">
                <div class="flex items-center justify-center w-full pb-6 space-x-4 md:justify-start">
                  <div class="flex flex-col items-start justify-start space-y-2">
                    <p class="text-lg font-semibold leading-4 text-left text-gray-800 ">
                      Nama</p>
                    <p class="text-sm leading-4 text-gray-600 ">Alamat</p>
                    <p class="text-sm leading-4 cursor-pointer ">PNo. Telp</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap items-center pb-4 mb-10 border-b border-gray-200 ">
              <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-600  ">
                  Pemesanan nomor: </p>
                <p class="text-base font-semibold leading-4 text-gray-800 ">
                  XX  </p>
              </div>
              <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-600  ">
                  Tanggal: </p>
                <p class="text-base font-semibold leading-4 text-gray-800 ">
                  17-02-2024</p>
              </div>
              <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm font-medium leading-5 text-gray-800  ">
                  Total: </p>
                <p class="text-base font-semibold leading-4 text-[#E8B740] ">
                  Idr</p>
              </div>
              <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-600  ">
                  Pembayaran melalui : </p>
                <p class="text-base font-semibold leading-4 text-gray-800  ">
                  Transfer rekening </p>
              </div>
            </div>
            <div class="px-4 mb-10">
              <div class="flex flex-col items-stretch justify-center w-full space-y-4 md:flex-row md:space-y-0 md:space-x-8">
                <div class="flex flex-col w-full space-y-6 ">
                  <h2 class="mb-2 text-xl font-semibold text-gray-700 ">Order details</h2>
                  <div class="flex flex-col items-center justify-center w-full pb-4 space-y-4 border-b border-gray-200 ">
                    <div class="flex justify-between w-full">
                      <p class="text-base leading-4 text-gray-800 ">Subtotal</p>
                      <p class="text-base leading-4 text-gray-600 ">Idr</p>
                    </div>
                    <div class="flex items-center justify-between w-full">
                      <p class="text-base leading-4 text-gray-800 ">Pengiriman</p>
                      <p class="text-base leading-4 text-gray-600 ">00</p>
                    </div>
                  </div>
                  <div class="flex items-center justify-between w-full">
                    <p class="text-base font-semibold leading-4 text-gray-800 ">Total</p>
                    <p class="text-base font-semibold leading-4 text-gray-600 ">Idr</p>
                  </div>
                </div>
                <div class="flex flex-col w-full px-2 space-y-4 md:px-8 ">
                  <h2 class="mb-2 text-xl font-semibold text-gray-700 ">Pengiriman</h2>
                </div>
              </div>
            </div>
            <div class="flex items-center justify-start gap-4 px-4 mt-6 ">
              <a href="/katalog" class="w-full text-center px-4 py-2 text-[#E8B740] border border-[#E8B740] rounded-md md:w-auto hover:text-white hover:bg-blue-600   ">
                Kembali 
              </a>
              <a href="/cekresi" class="w-full text-center px-4 py-2 bg-[#E8B740]  rounded-md text-gray-50 md:w-auto  hover:bg-blue-600  ">
                Cek resi
              </a>
            </div>
          </div>
        </div>
      </section>
    
    </x-layout>
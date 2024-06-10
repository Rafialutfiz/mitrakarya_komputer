{{-- <x-layout>
<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="container mx-auto px-4">
      <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
      <div class="flex flex-col md:flex-row gap-4">
        <div class="md:w-3/4">
          <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
            <table class="w-full">
              <thead>
                <tr>
                  <th class="text-left font-semibold">Product</th>
                  <th class="text-left font-semibold">Harga</th>
                  <th class="text-left font-semibold">Jumlah</th>
                  <th class="text-left font-semibold">Total</th>
                  <th class="text-left font-semibold">Hapus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-4">
                    <div class="flex items-center">
                      <img class="h-16 w-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                      <span class="font-semibold">Nama product</span>
                    </div>
                  </td>
                  <td class="py-4">$19.99</td>
                  <td class="py-4">
                    <div class="flex items-center">
                      <button class="border rounded-md py-2 px-4 mr-2">-</button>
                      <span class="text-center w-8">1</span>
                      <button class="border rounded-md py-2 px-4 ml-2">+</button>
                    </div>
                  </td>
                  <td class="py-4">$19.99</td>
                  <td><button class="bg-slate-300 border-2 border-slate-400 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white hover:border-red-700">Remove</button></td>
                </tr>
                <!-- More product rows -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="md:w-1/4">
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold mb-4">Rincian</h2>
            <div class="flex justify-between mb-2">
              <span>Subtotal</span>
              <span>$19.99</span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Biaya layanan</span>
              <span>Rp 1.99</span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Biaya Pengiriman</span>
              <span>Rp 2.00</span>
            </div>
            <hr class="my-2">
            <div class="flex justify-between mb-2">
              <span class="font-semibold">Total</span>
              <span class="font-semibold">Rp 21.98</span>
            </div>
            <a href="/pembayaran">
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout
            <a href="/pembayaran">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!--end font-->

    <title>Mitra Karya</title>
</head>
<body class=" w-full h-full" style="background-image: url('bg.png');">
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-5xl font-bold text-[#E8B740] mb-8 ml-4 mt-10">
            Pembayaran.
        </h1>
        <div class="grid grid-cols-12 gap-4">
            <div class="md:col-span-12 lg:col-span-8 col-span-12">
                <!-- Card -->
                <div class="bg-zinc-800 rounded-xl shadow p-4 sm:p-7">
                    <!-- Shipping Address -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold  text-[#E8B740]  mb-2">
                            Shipping Address
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-white  mb-1" for="first_name">
                                    First Name
                                </label>
                                <input class="w-full rounded-lg border py-2 px-3" id="first_name" type="text">
                                </input>
                            </div>
                        <div class="">
                            <label class="block text-white  mb-1" for="phone">
                                Nomor Hp
                            </label>
                            <input class="w-full rounded-lg border py-2 px-3" id="phone" type="text">
                            </input>
                        </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-white  mb-1" for="address">
                                Alamat
                            </label>
                            <input class="w-full rounded-lg border py-2 px-3" id="address" type="text">
                            </input>
                        </div>
                        <div class="mt-4">
                            <label class="block text-white  mb-1" for="city">
                                Kota
                            </label>
                            <input class="w-full rounded-lg border py-2 px-3" id="city" type="text">
                            </input>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">

                            <div>
                                <label class="block text-white  mb-1" for="zip">
                                    Kode Pos
                                </label>
                                <input class="w-full rounded-lg border py-2 px-3" id="zip" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="text-lg font-semibold mb-4 text-white"> Bayar Melalui </div>
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img alt="Rekening" class="w-12 h-12 rounded-full" src="">
                            </img>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-white truncate ">
                                No. Rek : berapa A/N siapa
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <div class="md:col-span-12 lg:col-span-4 col-span-12">
                <div class="bg-zinc-800 rounded-xl shadow p-4 sm:p-7 ">
                    <div class="text-xl font-bold text-[#E8B740] mb-2">
                        Rincian Pembayaran
                    </div>
                    <div class="flex justify-between mb-2 font-bold text-white ">
                        <span>
                            Subtotal
                        </span>
                        <span>
                            Rp.
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-bold text-white ">
                        <span>
                            Pengiriman
                        </span>
                        <span>
                            0.00
                        </span>
                    </div>
                    <hr class="bg-slate-400 my-4 h-1 rounded">
                    <div class="flex justify-between mb-2 font-bold text-white ">
                        <span>
                            Total
                        </span>
                        <span>
                            Rp.
                        </span>
                    </div>
                    </hr>
                </div>
                <button class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                    Order Sekarang
                </button>
                <div class="bg-zinc-800 mt-4 rounded-xl shadow p-4 sm:p-7 ">
                    <div class="text-xl font-bold underline text-white  mb-2">
                        Rincian Produk
                    </div>
                    <ul class="divide-y divide-gray-200 " role="list">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="Produk" class="w-12 h-12 rounded-full" src="https://iplanet.one/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1695435917">
                                    </img>
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-white truncate ">
                                        Apple iPhone 15 Pro Max
                                    </p>
                                    <p class="text-sm text-gray-500 truncate ">
                                        Jumlah: 1
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-white ">
                                    Rp.
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="Produk" class="w-12 h-12 rounded-full" src="https://iplanet.one/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1695435917">
                                    </img>
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-white truncate ">
                                        Apple iPhone 15 Pro Max
                                    </p>
                                    <p class="text-sm text-gray-500 truncate ">
                                        Jumlah: 1
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-white ">
                                    Rp.
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="Produk" class="w-12 h-12 rounded-full" src="https://iplanet.one/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1695435917">
                                    </img>
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-white truncate ">
                                        Apple iPhone 15 Pro Max
                                    </p>
                                    <p class="text-sm text-gray-500 truncate ">
                                        Jumlah: 1
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-white ">
                                    Rp.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    <script src="script.js"></script>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!--end font-->

    <title>Mitra Karya</title>
</head>

<x-layout>
<body class=" w-full h-full bg-black">
  <div class="w-full  py-10 px-4 sm:px-6 lg:px-8 mx-auto text-white bg-gradient-to-r from-black to-gray-800">
    <div class="container mx-auto px-4 ml-32">
      <h1 class="text-5xl text-[#E8B740] font-semibold mb-4 ">Keranjang</h1>
      <div class="flex flex-col md:flex-row gap-4">
        <div class="md:w-3/4">
          <div class="bg-zinc-800 overflow-x-auto rounded-lg shadow-md p-6 mb-4">
            <table class="w-full">
              <thead>
                <tr>
                  <th class="text-left font-semibold">Product</th>
                  <th class="text-left font-semibold">Harga</th>
                  <th class="text-left font-semibold">Jumlah</th>
                  <th class="text-left font-semibold">Total</th>
                  <th class="text-left font-semibold">Hapus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-4">
                    <div class="flex items-center">
                      <img class="h-16 w-16 mr-4" src="{{ url('img/macbook.jpg') }}" alt="Product image">
                      <span class="font-semibold"> MacBook Air</span>
                    </div>
                  </td>
                  <td class="py-4">Rp 10.000.000</td>
                  <td class="py-4">
                    <div class="flex items-center">
                      <button class="border rounded-md py-2 px-4 mr-2">-</button>
                      <span class="text-center w-8">1</span>
                      <button class="border rounded-md py-2 px-4 ml-2">+</button>
                    </div>
                  </td>
                  <td class="py-4">Rp 10.000.000</td>
                  <td><button class="bg-slate-300 border-2 border-slate-400 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white hover:border-red-700">Hapus</button></td>
                </tr>
                <!-- More product rows -->
              </tbody>
            </table>
            <div>
              <a href="/pembayaran">
              
              <button class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                Checkout Sekarang
            </button>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</x-layout>
</html>


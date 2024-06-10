<nav class="bg-gradient-to-r bg-gray-900 pb-2 fixed top-0 left-0 right-0 z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <img class="h-8 w-8" src="{{ url('img/logo.png') }}" alt="Mitra Karya Komputer">
                    </a>
                </div>
            </div>
            <!-- Search Box in the center -->
            <div class="flex-1 flex justify-center mx-4">
                <div class="relative w-full max-w-lg">
                    <input type="text" placeholder="Cari di sini" class="block w-full pl-2 pr-4 py-2 bg-gray-800 text-gray-300 placeholder-gray-400 border border-transparent rounded-lg focus:border-gray-700 focus:bg-gray-700 focus:ring-0 sm:text-sm">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <i class="text-white" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <!-- Shopping Cart Button -->
                <a href="/cekresi" class="text-gray-300 hover:text-[#E8B740]">
                    <i data-feather="truck"></i>
                </a>
                <a href="/cart" class="text-gray-300 hover:text-[#E8B740]">
                    <i data-feather="shopping-cart"></i>
                </a>
                <!-- Profile dropdown -->
                <div class="relative">
                    <div>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                        <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Navigation Links -->
        <div class="hidden md:flex mt-4 space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/tentang" :active="request()->is('tentang')">Tentang</x-nav-link>
            <x-nav-link href="/katalog" :active="request()->is('katalog')">Katalog</x-nav-link>
            <x-nav-link href="/lokasi" :active="request()->is('lokasi')">Lokasi</x-nav-link>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu" x-cloak>
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/tentang" :active="request()->is('tentang')">Tentang</x-nav-link>
            <x-nav-link href="/katalog" :active="request()->is('katalog')">Katalog</x-nav-link>
            <x-nav-link href="/lokasi" :active="request()->is('lokasi')">Lokasi</x-nav-link>
        </div>
        <!-- Mobile Cart, Register, and Login Links -->
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="space-y-1 px-2">
                <a href="/cart" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
                    <i data-feather="shopping-cart"></i>
                </a>
                <a href="/cekresi" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
                    <i data-feather="truck"></i>
                </a>
                <a href="/register" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
                    Register
                </a>
                <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
                    Log In
                </a>
            </div>
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!--end font-->
    <title>Mitra Karya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        {{-- <x-navbar></x-navbar> --}}
        <main>
            <div class="bg-gradient-to-r from-black to-gray-800 pt-20 lg:pt-32">
                {{ $slot }}
            </div>
        </main>
        {{-- <x-footer>{{ $title }}</x-footer> --}}
    </div>
    <script>
        feather.replace();
    </script>
</body>
</html>
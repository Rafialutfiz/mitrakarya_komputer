<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!--end font-->
    <style type="text/tailwindcss">
      </style>
    <title>Mitra Karya</title>
</head>

<x-layout>
<body class="text-white bg-black w-full h-full" style="background-image: url('bg.png');" >

    <div class="flex justify-center h-screen items-center">
        <div class="w-[485px] h-[485px] bg-black">
        <h1 class="text-[#E8B740] text-5xl font-semibold pt-10 pb-5 pl-16">Sign Up</h1>
        <form action="login.php" method="POST">
            <fieldset>
            <p>
                <h1 class="pl-16 pb-2">EMAIL</h1>
                <input type="text" name="email" placeholder="email" class="w-3/4 ml-16 py-3 px-4 w- block bg-zinc-800 rounded-full text-white mb-4" />
            </p>
            <p>
                <h1 class="pl-16 pb-2">USERNAME</h1>
                <input type="text" name="username" placeholder="username" class="w-3/4 ml-16 py-3 px-4 w- block bg-zinc-800 rounded-full text-white mb-4" />
            </p>
            <p>
                <h1 class="pl-16 pb-2 ">PASSWORD</h1>
                <input type="password" name="password" placeholder="password" class="w-3/4 ml-16 py-3 px-4 w- block bg-zinc-800 rounded-full text-white mb-4"/>
            </p>
            <p class="w-full ">
                <input class=" bg-gradient-to-r from-yellow-600 to-white rounded-full w-3/4 mt-4 py-3 ml-16 text-black font-bold" type="submit" name="submit" value="Sign In" />
            </p>
            </fieldset>
        </form>

        </div>
        <div class="w-[485px] h-[485px] bg-zinc-800 text-white">
            <h1 class=" text-4xl font-semibold pb-4 pt-36 px-10 text-center">Halo, Selamat Datang di Mitra Karya</h1>
            <p class="text-center">Sudah Punya Akun?</p>
            <button class="w-full py-6">
                <a wire:navigate href="/login" class="border-[#E8B740] border-2 px-4 py-2 rounded-full"> Sign In</a>
            </button>
        </div>
    </div>
</body>
</x-layout>
</html>
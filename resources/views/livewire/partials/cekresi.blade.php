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

    <style type="text/tailwindcss"></style>
    <title>Mitra Karya</title>
</head>

<x-layout>
<body class=" w-full h-full bg-balck ">
<div class="lex mx-96 h-screen mt-9 ">
    <h1 class="text-[#E8B740] text-[64px] font-extrabold ">Check Order.</h1>
    <form>
        <div class="form-group ">
            <label for="exampleFormControlSelect1" class="text-white font-bold">Pilih Kurir</label>
            <select class="form-control pl-6 pr-56  py-2 ml-8 my-4 rounded-full" id="courier_input">
                <option value selected hidden  >Pilih Kurir</option>
                <option value="jne"> JNE</option>
                <option value="pos"> Pos Indonesia</option>
                <option value="jnt"> Jnt</option>
                <option value="sicepat"> SiCepat</option>
                <option value="anteraja"> AnterAja</option>
                <option value="wahana"> Wahana</option>
                <option value="ninja"> Ninja</option>
                <option value="lion"> Lion</option>
                <option value="ide"> ID Express</option>
                <option value="spx"> Shopee Express</option>
            </select>
        </div>
        <div class="form-group">
        <div class="form-group">
            <label for="exampleInputPassword1"  class="text-white font-bold">Nomor Resi</label>
            <input type="text" class="form-control pr-40  pl-8 py-2 rounded-full ml-4" id="awb_input" placeholder="Masukkan Nomer Resi">
        </div>
        <button type="button" class="my-4 ml-80  bg-[#E8B740] font-bold text-lg px-16 py-2 btn rounded-full btn-primary" id="search-button">Cek</button>
    </form>
    <div class="row" id="resi-status">
    </div>
</div>


<script src="{{ url('resources/js/script.js') }}"></script>
</body>
</x-layout>
</html>
<?php

namespace App\Livewire\Partials;

use app\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use app\Livewire\Partials\tittle;

// #[Tittle('Products - Mitra Karya Komputer')]

class Katalog extends Component
{

    // use WithPagination;
    public function index()
    {
       // Mengambil semua produk dari database
       $products = Product::all();
       // Mengirimkan data produk ke view
       return view('your-view-name', compact('products'));
    }
}

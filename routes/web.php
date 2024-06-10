<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\Homepage;
use App\Livewire\Partials\Abin;
use App\Livewire\Partials\Cart;
use App\Livewire\Partials\Cekresi;
use App\Livewire\Partials\Katalog;
use App\Livewire\Partials\Lokasi;
use App\Livewire\Partials\Order;
use App\Livewire\Partials\OrderDetail;
use App\Livewire\Partials\Pembayaran;
use App\Livewire\Partials\Productdetail;
use App\Livewire\Partials\Tentang;
use App\Livewire\SuccesPage;
use Filament\Pages\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/katalog', Katalog::class);
Route::get('/lokasi', Lokasi::class);
Route::get('/tentang', Tentang::class);
Route::get('/cart', Cart::class);
Route::get('/productdetail', Productdetail::class);
Route::get('/cekresi', Cekresi::class);

Route::get('/pembayaran', Pembayaran::class);
Route::get('/myorder', Order::class);
Route::get('/myorder/{order}', OrderDetail::class);

Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot', ForgotPasswordPage::class);
Route::get('/reset', ResetPasswordPage::class);

Route::get('/succes', SuccesPage::class);
Route::get('/cancel', CancelPage::class);


// Route::get('/', function () {
//     return view('home', ['title' => 'Home Page']);
// });

// Route::get('/tentang', function () {
//     return view('tentang', ['title' => 'Tentang']);
// });

// Route::get('/katalog', function () {
//     return view('katalog', ['title' => 'Katalog']);
// });

// Route::get('/lokasi', function () {
//     return view('lokasi', ['title' => 'Lokasi']);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::namespace('App\Http\Controllers')->group(function () {
    Auth::routes();
});

Route::get('/', \App\Http\Livewire\Home::class)->name('home');
Route::get('/products', \App\Http\Livewire\ProductIndex::class)->name('products');
Route::get('/products/apparel/{apparelId}', \App\Http\Livewire\ProductLiga::class)->name('products-apparel');
Route::get('/products/{Id}', \App\Http\Livewire\ProductDetail::class)->name('product-detail');
Route::get('/keranjang', \App\Http\Livewire\Keranjang::class)->middleware('auth')->name('keranjang');
Route::get('/checkout', \App\Http\Livewire\Checkout::class)->middleware('auth')->name('checkout');
Route::get('/history', \App\Http\Livewire\History::class)->middleware('auth')->name('history');


   Route::get('/adm',[DashboardController::class, 'dashboard'])->name('dashboard');
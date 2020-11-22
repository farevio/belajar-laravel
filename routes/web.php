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
Route::get('/superusr', \App\Http\Livewire\SuperUsr::class)->name('superusr');
Route::get('/superusr/product-add', \App\Http\Livewire\ProductAdd::class)->name('product-add');
Route::get('/superusr/all-product', \App\Http\Livewire\ProductAll::class)->name('all-products');
Route::get('/superusr/products-log', \App\Http\Livewire\ProductLog::class)->name('products-log');
Route::get('/superusr/store-stat', \App\Http\Livewire\StatStore::class)->name('store-stat');
Route::get('/superusr/buyer-stat', \App\Http\Livewire\StatBuyer::class)->name('buyer-stat');
Route::get('/superusr/complaint', \App\Http\Livewire\StoreComplaint::class)->name('complaint');
Route::get('/superusr/products-review', \App\Http\Livewire\StoreReview::class)->name('products-review');
Route::get('/superusr/admin', \App\Http\Livewire\StoreAdmin::class)->name('admin');


   Route::get('/adm',[DashboardController::class, 'dashboard'])->name('dashboard');
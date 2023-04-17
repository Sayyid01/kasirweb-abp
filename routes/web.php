<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes foyr your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/customer', [Auth\CustomerController::class, 'getLogin'])->name('customerLogin');
Route::get('/custRegister', [Auth\CustomerController::class, 'custRegister'])->name('custRegister');

Route::post('/customer', [Auth\CustomerController::class, 'postLogin']);

Route::get('/kasir', [Auth\KasirController::class, 'getLogin'])->name('kasirLogin');
Route::post('/kasir', [Auth\KasirController::class, 'postLogin']);

Route::get('/admin', [Auth\AdminController::class, 'getLogin'])->name('adminLogin');
Route::post('/admin', [Auth\AdminController::class, 'postLogin']);

Route::middleware('auth:admin')->group(function () {
    //GET Index
    Route::view('/dashboard', 'pages.dashboardAdmin')->name('dashboard');

    //Stok
    Route::get('/stok', [Main\StokItemController::class, 'getTableStok'])->name('stok');
    Route::post('/stok/tambahStok', [Main\StokItemController::class, 'tambahStok'])->name('tambahStok');
    Route::post('/stok/updateStok', [Main\StokItemController::class, 'updateStok'])->name('updateStok');
    Route::get('/stok/deleteStok/{id}', [Main\StokItemController::class, 'deleteStok'])->name('deleteStok');

    //Produk
    Route::get('/produk/{filename}', [Main\ProdukCardController::class, 'getGambarMenu'])->name('gambarMenu');

    Route::get('/produk', [Main\ProdukCardController::class, 'getTableProduk'])->name('produk');

    Route::post('/produk/tambahMenuDrink', [Main\ProdukCardController::class, 'tambahMenuDrink'])->name('tambahMenuDrink');
    Route::post('/produk/updateMenuDrink', [Main\ProdukCardController::class, 'updateMenuDrink'])->name('updateMenuDrink');
    Route::get('/produk/deleteDrinkItem/{id}', [Main\ProdukCardController::class, 'deleteDrinkItem'])->name('deleteDrinkItem');

    Route::post('/produk/tambahMenuFood', [Main\ProdukCardController::class, 'tambahMenuFood'])->name('tambahMenuFood');
    Route::post('/produk/updateMenuFood', [Main\ProdukCardController::class, 'updateMenuFood'])->name('updateMenuFood');
    Route::get('/produk/deleteFoodItem/{id}', [Main\ProdukCardController::class, 'deleteFoodItem'])->name('deleteFoodItem');

    Route::get('/login', [Auth\AdminController::class, 'postLogout'])->name('adminLogout');
});

Route::get('/',function(){
    return redirect('customer');
});

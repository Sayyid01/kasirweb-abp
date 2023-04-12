<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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

Route::get('/admin', [Auth\AdminController::class, 'getLogin'])->name('auth.admin.login');
Route::post('/admin', [Auth\AdminController::class, 'postLogin']);

Route::middleware('auth:admin')->group(function () {
    //GET Index
    Route::get('/home', function () {
        return view('pages.stock');
    });
    Route::get('/product', function () {
        return view('pages.product');
    })->name('product');
    Route::get('/', [Auth\AdminController::class, 'postLogout'])->name('admin.logout');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers\Auth\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', [AdminController::class, 'getLogin'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'postLogin']);

Route::middleware('auth:admin')->group(function () {
    //GET Index
    Route::get('pages.stock')->name('stock');
    // Route::get('admin/logout', 'Auth\AdminAuthController@postLogout')->name('admin.logout');
});

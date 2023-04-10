<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.admin.login');
})->name('login');

Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');

Route::middleware('auth:admin')->group(function () {
    //GET Index
    Route::get('pages.stock')->name('stock');
    Route::get('admin/logout', 'Auth\AdminAuthController@postLogout')->name('admin.logout');
});

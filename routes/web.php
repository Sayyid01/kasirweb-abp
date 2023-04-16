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
Route::view('/', 'auth.kasir.login');
Route::get('/admin', [Auth\AdminController::class, 'getLogin'])->name('adminLogin');
Route::post('/admin', [Auth\AdminController::class, 'postLogin']);

Route::middleware('auth:admin')->group(function () {
    //GET Index
    Route::view('/dashboard', 'pages.dashboardAdmin')->name('dashboard');
    Route::view('/stock', 'pages.stock')->name('stock');
    Route::view('/product', 'pages.product')->name('product');
    Route::get('/login', [Auth\AdminController::class, 'postLogout'])->name('adminLogout');
});
// for customer
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::gey('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::gey('/user/orders',UserOrdersComponent::class)->name('user.orders');
    Route::gey('/user/orders/{order_id}',UserDetailsComponent::class)->name('user.orderdetails');
});

<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdressController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\TambahProductController;
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
    return view('Home.home');
});

Route::get('/about_us', [AboutUsController::class, 'about_us']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/address', [AdressController::class, 'address']);


//Admin
Route::get('/login_admin', [LoginAdminController::class, 'index']);
Route::get('/product_admin', [ProductAdminController::class, 'index']);
Route::get('/tambah_product', [TambahProductController::class, 'index']);


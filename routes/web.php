<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdressController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\TambahProductController;
use App\Http\Controllers\UpdateProductController;
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
Route::get('/admin', [LoginAdminController::class, 'admin']);
Route::post('/login', [LoginAdminController::class, 'login'])->name('login');
Route::post('/logout', [LoginAdminController::class, 'logout']);
Route::get('/login_admin', [LoginAdminController::class, 'index']);
Route::middleware(['admin'])->group(function () {
    Route::get('/home/admin', [LoginAdminController::class, 'admin']);
    Route::get('/product_admin', [ProductAdminController::class, 'index']);
    Route::get('/tambah_product', [ProductAdminController::class, 'create'])->name('tambah');
    Route::post('/tambah_product', [ProductAdminController::class, 'createProduct'])->name('tambah_product');
    Route::get('/update_product', [ProductAdminController::class, 'update'])->name('update');
    Route::post('/update_product/{id}', [ProductAdminController::class, 'updateProduct'])->name('update_product');
    Route::get('/about_us/admin', [LoginAdminController::class, 'about_us']);
    Route::get('/product/admin', [LoginAdminController::class, 'product']);
    Route::get('/address/admin', [LoginAdminController::class, 'address']);
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductParameterController;
use App\Http\Controllers\ProductApplicationController;

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

// Route::get('/', function () {
    //     return view('welcome');
    // });
    
// Route::view('/', 'index');
// Route::view('/products', 'products');
// Route::view('/product', 'product');
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/contact', 'contact');
// Route::view('/product-parameter', 'product-parameter');
// Route::view('/product-application', 'product-application');
Route::view('/product-video', 'product-video');
// Route::view('/certificates', 'certificates');
// Route::view('/search', 'search');
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/product-description/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product-parameter/{id}', [ProductParameterController::class, 'show'])->name('product-parameter.show');
// Route::get('/products', [CategoryController::class, 'index'])->name('category.index');
Route::get('/product-application/{product}', [ProductApplicationController::class, 'show'])->name('product-application.show');
// Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.show');
Route::get('/certificates/{id}', [CertificateController::class, 'show'])->name('certificate.show');
// Route::get('/product', [ProductsController::class, 'index'])->name('categories.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
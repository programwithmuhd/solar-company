<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductFaqsController;
use App\Http\Controllers\ProductVideoController;
use App\Http\Controllers\ThankyouPageController;
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
Route::get('/about', [AboutPageController::class, 'index'])->name('about-page.index');
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/product-description/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product-parameter/{id}', [ProductParameterController::class, 'show'])->name('product-parameter.show');
// Route::get('/products', [CategoryController::class, 'index'])->name('category.index');
Route::get('/product-application/{product}', [ProductApplicationController::class, 'show'])->name('product-application.show');
// Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.show');
Route::get('/certificates/{id}', [CertificateController::class, 'show'])->name('certificate.show');
Route::get('/product-video/{id}', [ProductVideoController::class, 'show'])->name('video.show');
Route::get('/product-faqs/{id}', [ProductFaqsController::class, 'show'])->name('faqs.show');
Route::get('/solar-projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/solar-project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/contact/create', [ContactPageController::class, 'index'])->name('contact-page.index');
Route::post('/contact/store', [ContactPageController::class, 'store'])->name('contact-page.store');
Route::get('/thankyou', [ThankyouPageController::class, 'index'])->name('thankyou.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;


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
//     return view('frontend.home');
// });
// Route::get('/product', function () {
//     return view('frontend.product');
// });
// Route::get('/categories', function () {
//     return view('frontend.categories');
// });

Route::get('/', [FrontendController::class, 'homepage'])->name('front.homepage');
Route::get('/about', [FrontendController::class, 'product'])->name('front.product');
Route::get('/blog', [FrontendController::class, 'categories'])->name('front.categories');

Route::resource('admin/category', CategoryController::class);
Route::resource('admin/banner', BannerController::class);
Route::resource('admin/subcategory', SubcategoryController::class);
Route::resource('admin/brand', BrandController::class);
Route::resource('admin/product', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

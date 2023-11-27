<?php


use App\Http\Controllers\FrontendController;


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
    return view('frontend.index');
});

Route::get('/abc', function () {
    return view('frontend.layouts.app');
});


// Route::view('home', 'frontend.home')->name('home');

Route::get('home', [FrontendController::class, 'index'])->name('home');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('cat_by_product', [FrontendController::class, 'cat_by_product'])->name('cat_by_product');


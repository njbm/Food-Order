<?php


use App\Http\Controllers\FrontendController;

Route::get('/clear', function () {
    $output = new \Symfony\Component\Console\Output\BufferedOutput();
    Artisan::call('optimize:clear', array(), $output);
    return $output->fetch();
})->name('/clear');

Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/admin', function () {
//     return view('backend.pages.index');
// });


// Route::view('home', 'frontend.home')->name('home');

Route::get('home', [FrontendController::class, 'index'])->name('home');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('cat_by_product', [FrontendController::class, 'cat_by_product'])->name('cat_by_product');


// Route::get('admin', [FrontendController::class, 'index'])->name('home');


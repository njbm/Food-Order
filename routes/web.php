<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StripeAccountController;




Route::get('kyc/{account_id?}', [StripeAccountController::class, 'kyc'])->name('stripe.kyc');
Route::get('stripe/connected/{account_id}', [StripeAccountController::class, 'verifyAccount'])->name('stripe.account.connect');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Route::view('home', 'frontend.home')->name('home');

Route::get('home', [FrontendController::class, 'index'])->name('home');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('cat_by_product', [FrontendController::class, 'cat_by_product'])->name('cat_by_product');

Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');






Route::get('/clear', function () {
    $output = new \Symfony\Component\Console\Output\BufferedOutput();
    Artisan::call('optimize:clear', array(), $output);
    return $output->fetch();
})->name('/clear');



require __DIR__.'/auth.php';

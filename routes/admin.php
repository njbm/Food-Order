<?php
use App\Http\Controllers\BackendController;



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () { 
   
  Route::get('dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
  Route::get('category', [BackendController::class, 'category'])->name('category');
  Route::get('country', [BackendController::class, 'country'])->name('country');
  
});
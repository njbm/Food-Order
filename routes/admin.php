<?php

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
   Route::get('dashboard', function () {
       return view('backend.layouts.index')->name('dashboard');
   });   

});
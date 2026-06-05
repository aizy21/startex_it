<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(HomeController::class)->name('home.')->group(function(){
    Route::get('/', 'index_view')->name('index');
    Route::get('/our-products/{product_view}', 'product_view')->name('product.index');
    Route::get('/services-we-provide', 'service_view')->name('services.index');
    Route::get('/privacy-policy', 'policy_view')->name('policy.index');
    Route::get('/terms-and-conditions', 'terms_view')->name('terms.index');
    Route::post('/contact', 'contact')->name("contact.submit");

});

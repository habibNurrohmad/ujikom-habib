<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/Home', function () {
    return view('customer.home');
});

Route::resource('products', ProductController::class);
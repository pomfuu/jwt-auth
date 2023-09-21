<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Import your AuthController
use App\Http\Controllers\CategoryController; // Import your AuthController

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
});


Route::group([
    'middleware' => 'api',
], function(){
    Route::resource(
        'categories', CategoryController::class
    );
});
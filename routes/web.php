<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::resource('listings', ListingController::class);
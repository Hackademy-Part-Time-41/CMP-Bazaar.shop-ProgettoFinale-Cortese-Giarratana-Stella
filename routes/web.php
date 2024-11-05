<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::resource('listings', ListingController::class);
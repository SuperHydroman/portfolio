<?php

use Illuminate\Support\Facades\Route;

if (config('app.env') === 'production')
    Route::inertia('/', 'ComingSoon')->name('home');
else Route::inertia('/', 'Home')->name('home');


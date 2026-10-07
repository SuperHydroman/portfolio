<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

if (config('app.env') === 'production')
    Route::inertia('/', 'ComingSoon')->name('home');
else Route::inertia('/', 'Home')->name('home');

Route::post('/submit-contact-form', [ContactController::class, 'store'])->name('contact.store');

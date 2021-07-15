<?php

use Illuminate\Support\Facades\Route;
use ReactPanel\Contact\HTTP\Controllers\ContactController;


Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');


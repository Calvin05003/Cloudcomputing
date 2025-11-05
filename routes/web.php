<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FormController;

Route::get('/kontak', [FormController::class, 'show'])->name('kontak.show');
Route::post('/kontak', [FormController::class, 'store'])->name('kontak.store');

Route::post('/send-email', [MailController::class, 'sendEmail'])
    ->name('send-email');
<?php

use Illuminate\Support\Facades\Route;

use splitbrain\phpQRCode\QRCode;

Route::get('/', function () {
    return view('welcome')
        ->with('qr', QRCode::svg('hello world'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

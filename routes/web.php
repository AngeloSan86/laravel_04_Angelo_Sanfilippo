<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MembersDetailsController;

Route::get('/', [GeneralController::class, 'homepage'])->name('home');

Route::get('/chi-siamo', [AboutUsController::class, 'aboutUs'])->name('about');

Route::get('/servizi', function () {
    return view('servizi');
})->name('services');

Route::get('/dettaglio/{id}', [MembersDetailsController::class, 'dettagliMembri'])->name('details');
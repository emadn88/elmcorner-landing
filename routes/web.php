<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '{locale?}', 'middleware' => 'web'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll');
});

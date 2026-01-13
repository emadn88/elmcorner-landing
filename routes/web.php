<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Sitemap (no locale prefix)
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Routes with locale prefix
Route::group(['prefix' => '{locale}', 'middleware' => 'web'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
})->where('locale', 'en|ar');

<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/case-studies', [PublicController::class, 'caseStudies'])->name('case-studies');
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/converse', [PublicController::class, 'converse'])->name('converse');
Route::get('/convert', [PublicController::class, 'convert'])->name('convert');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/connect', [PublicController::class, 'connect'])->name('connect');
Route::get('/brochure', [PublicController::class, 'brochure'])->name('brochure');
Route::get('/corporate-deck', [PublicController::class, 'corporateDeck'])->name('corporate-deck');

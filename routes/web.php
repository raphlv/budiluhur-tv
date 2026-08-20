<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', [HomeController::class, 'index'])->name('home');

// Programs
Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{slug}', [ProgramController::class, 'show'])->name('programs.show');

// Live Report & Videos
Route::get('/live-report', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/{slug}', [VideoController::class, 'show'])->name('videos.show');

// News & Updates
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Teams & Crew Registration
Route::get('/teams', [CrewController::class, 'index'])->name('teams.index');
Route::post('/crew/register', [CrewController::class, 'store'])->name('crew.register');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send');

// Admin Panel (CMS)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/news', [AdminController::class, 'newsIndex'])->name('news.index');
    Route::post('/news', [AdminController::class, 'storeNews'])->name('news.store');
    Route::get('/tickers', [AdminController::class, 'tickersIndex'])->name('tickers.index');
    Route::post('/tickers', [AdminController::class, 'storeTicker'])->name('tickers.store');
    Route::delete('/tickers/{id}', [AdminController::class, 'deleteTicker'])->name('tickers.delete');
});

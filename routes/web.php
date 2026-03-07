<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/services', [PublicController::class, 'services'])->name('services');
Route::get('/portfolios', [PublicController::class, 'portfolios'])->name('portfolios');
Route::get('/portfolio/{portfolio:slug}', [PublicController::class, 'portfolioDetail'])->name('portfolio.detail');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicController::class, 'submitContact'])->name('contact.submit');

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\SiteSettingController;

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TeamMemberController;

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::name('admin.')->group(function() {
        Route::resource('services', ServiceController::class);
        Route::resource('portfolio-categories', \App\Http\Controllers\Admin\PortfolioCategoryController::class);
        Route::resource('portfolios', PortfolioController::class);
        
        Route::get('messages', [ContactMessageController::class, 'index'])->name('messages.index');
        Route::get('messages/{message}', [ContactMessageController::class, 'show'])->name('messages.show');
        Route::delete('messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
        
        Route::get('settings', [SiteSettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [SiteSettingController::class, 'store'])->name('settings.store');
        
        Route::get('about', [AboutController::class, 'index'])->name('about.index');
        Route::post('about', [AboutController::class, 'store'])->name('about.store');
        Route::resource('team_members', TeamMemberController::class)->except(['index', 'show']);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Template\Frontend\Nusantara\Main\Homeindex;

Route::get('/', Homeindex::class)->name('root');

Auth::routes();
Route::middleware(['auth', 'web'])->group(function () {

    // Dashboard
    Route::get('backend/admin/home', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.dashboard');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

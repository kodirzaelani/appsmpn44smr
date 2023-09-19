<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Template\Frontend\Nusantara\Main\Homeindex;

Route::get('/', Homeindex::class)->name('root');

Auth::routes();
Route::middleware(['auth', 'web'])->group(function () {

    // Dashboard
    Route::get('backend/admin/home', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.admin');

    // Setting
    Route::get('backend/settings', [App\Http\Controllers\Backend\OptionController::class, 'setting'])->name('backend.settings');
    Route::post('backend/settings/create', [App\Http\Controllers\Backend\OptionController::class, 'createsetting'])->name('backend.settings.create');
    Route::post('backend/settings/store', [App\Http\Controllers\Backend\OptionController::class, 'storesetting'])->name('backend.settings.store');
    Route::get('backend/settings/{option}/edit', [App\Http\Controllers\Backend\OptionController::class, 'editsetting'])->name('backend.settings.edit');
    Route::put('backend/settings/{option}/update', [App\Http\Controllers\Backend\OptionController::class, 'updatesetting'])->name('backend.settings.update');

    // Permission
    Route::get('backend/permissions/index', [App\Http\Controllers\Backend\PermissionController::class, 'index'])->name('backend.permissions.index');

    // Role
    Route::get('backend/roles/index', [App\Http\Controllers\Backend\RoleController::class, 'index'])->name('backend.roles.index');
    Route::get('backend/roles/create', [App\Http\Controllers\Backend\RoleController::class, 'create'])->name('backend.roles.create');
    Route::post('backend/roles/store', [App\Http\Controllers\Backend\RoleController::class, 'store'])->name('backend.roles.store');
    Route::get('backend/roles/{role}/edit', [App\Http\Controllers\Backend\RoleController::class, 'edit'])->name('backend.roles.edit');
    Route::put('backend/roles/{role}/update', [App\Http\Controllers\Backend\RoleController::class, 'update'])->name('backend.roles.update');

    // User
    Route::get('backend/users/index', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.users.index');
    Route::get('backend/users/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('backend.users.create');
    Route::post('backend/users/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('backend.users.store');
    Route::get('backend/users/{user}/edit', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('backend.users.edit');
    Route::put('backend/users/{user}/update', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('backend.users.update');
    Route::get('backend/admin/profile', [App\Http\Controllers\Backend\BackendController::class, 'userprofile'])->name('backend.userprofile');

    Route::get('backend/admin/manage-menus/{id?}', [App\Http\Controllers\Backend\MenufrontendController::class, 'index'])->name('backend.dashboard');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

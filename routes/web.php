<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\DiscordController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('homepage');

Route::namespace('Auth')->group(function () {
    Route::get('auth/discord', [DiscordController::class, 'redirectToDiscord'])->name('auth.discord');
    Route::get('auth/discord/handle', [DiscordController::class, 'handle'])->name('auth.discord.handle');
    Route::get('auth/logout', [DiscordController::class, 'logout'])->name('auth.logout');
});

Route::prefix('admin')->as('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});

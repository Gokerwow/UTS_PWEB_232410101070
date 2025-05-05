<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/login',  [PageController::class, 'showlogin'])
    -> name('login');

Route::post('/login',  [PageController::class, 'login'])
    -> name('login.process');

Route::get('/', [PageController::class, 'showHomepage'])
    -> name('homepage');

Route::get('/dashboard', [PageController::class, 'showDashboard'])
    -> name('dashboard');

Route::get('/dashboard/content', [PageController::class, 'showPengelolaan'])
    -> name('pengelolaan');

Route::get('/profile', [PageController::class, 'showProfile'])
    -> name('profile');


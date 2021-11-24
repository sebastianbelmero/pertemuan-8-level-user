<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('/halaman-user', function () {
        return view('halaman-user');
    })->name('halaman-user');
});

Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/halaman-admin', function () {
        return view('halaman-admin');
    })->name('halaman-admin');
});

require __DIR__.'/auth.php';

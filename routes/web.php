<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
})->name('home');

Route::get('/buttons', function () {
    return Inertia::render('ComponentPages/Buttons');
})->name('buttons');

Route::get('/loaders', function () {
    return Inertia::render('ComponentPages/Loaders');
})->name('loaders');

Route::get('/hamburger-icons', function () {
    return Inertia::render('ComponentPages/HamburgerIcons');
})->name('hamburgers');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

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


//All Page Routes

Route::get('/home', function () {
    return view('Frontend.Pages.home');
})->name('home');

Route::get('/why-us', function () {
    return view('Frontend.Pages.why-us');
})->name('why-us');

Route::get('/portfolio', function () {
    return view('Frontend.Pages.portfolio');
})->name('portfolio');

Route::get('/free-trial', function () {
    return view('Frontend.Pages.home');
})->name('freetrial');

Route::get('/order-now', function () {
    return view('Frontend.Pages.home');
})->name('ordernow');

Route::get('/contact-us', function () {
    return view('Frontend.Pages.home');
})->name('contactus');





Route::middleware(['auth:sanctum', 'verified'])->get('/admin/panel', function () {
    return view('Admin.Pages.dashboard');
})->name('dashboard');

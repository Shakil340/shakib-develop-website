<?php

use App\Http\Controllers\Admin\Contact\ContactController;
use App\Http\Controllers\Admin\Contact\SubjectController;
use App\Http\Controllers\Admin\FreeTrialController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\dashboard;
use App\Http\Controllers\User\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
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


// Home Page Route
Route::get('/', function () {
    return view('welcome');
});

//Admin Panel Route
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/panel', function () {
    return view('Admin.master.dashboard');
})->name('dashboard');


//Menu Page Routes
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
    return view('Frontend.Pages.free-trial');
})->name('free-trial');

//Route::get('/order-now', function () {
//    return view('User.dashboard');
//})->name('order-now');

Route::get('/contact-us', function () {
    return view('Frontend.Pages.contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('Frontend.Pages.about-us');
})->name('about-us');

//Menu Drop-Down page Routes



Route::prefix('/service')->name('service.')->group(function(){

    // ++++++Photoshop Routes

    Route::get('/clipping-path', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.image-clipping-path');
    })->name('clipping-path');

    Route::get('/image-retouching', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.image-retouching');
    })->name('image-retouching');

    Route::get('/image-masking', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.image-masking');
    })->name('image-masking');

    Route::get('/image-manipulation', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.image-manipulation');
    })->name('image-manipulation');

    Route::get('/photo-resizing', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.photo-resizing');
    })->name('photo-resizing');

    Route::get('/color-correction', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.color-correction');
    })->name('color-correction');

    Route::get('/background-remove', function () {
        return view('Frontend.Pages.Service-Pages.Photoshop.background-remove');
    })->name('background-remove');



    //++++++++++Illustrator Page Routes

    Route::get('/logo-design', function () {
        return view('Frontend.Pages.Service-Pages.Illustrator.logo-design');
    })->name('logo-design');

    Route::get('/ads-design', function () {
        return view('Frontend.Pages.Service-Pages.Illustrator.ads-design');
    })->name('ads-design');

    Route::get('/business-card-design', function () {
        return view('Frontend.Pages.Service-Pages.Illustrator.business-card-design');
    })->name('business-card-design');

    Route::get('/raster-to-vector', function () {
        return view('Frontend.Pages.Service-Pages.Illustrator.raster-to-vector');
    })->name('raster-to-vector');


});


//Slider Page Routes

Route::prefix('slider')->name('slider.')->group(function(){
    Route::get('/manage',[SliderController::class,'index'])->name('index');
    Route::get('/create',[SliderController::class,'create'])->name('create');
    Route::post('/store',[SliderController::class,'store'])->name('store');
});


//HomeService Page Routes

Route::prefix('home_service')->name('home_service.')->group(function(){
    Route::get('/manage',[HomeController::class,'index'])->name('index');
    Route::get('/create',[HomeController::class,'create'])->name('create');
    Route::post('/store',[HomeController::class,'store'])->name('store');
});

//Subject Page Routes

Route::prefix('contact-us')->name('contact-us.')->group(function(){
    Route::get('/manage',[SubjectController::class,'index'])->name('index');
    Route::get('/create',[SubjectController::class,'create'])->name('create');
    Route::post('/store',[SubjectController::class,'store'])->name('store');
});


//Contact-Us Page Routes

Route::prefix('contact')->name('contact.')->group(function(){
    Route::get('/manage',[ContactController::class,'index'])->name('index');
    Route::post('/store',[ContactController::class,'store'])->name('store');

});


//Contact-Us Page Routes

Route::prefix('user')->name('user.')->group(function(){
    Route::get('/dashboard',[dashboardController::class,'index'])->name('index');
    Route::post('/logout',[dashboardController::class,'logout'])->name('logout');


});

//Free-Trial Page Routes

Route::prefix('free-trial')->name('free-trial.')->group(function(){
    Route::get('/dashboard',[FreeTrialController::class,'index'])->name('index');
    Route::post('/store',[FreeTrialController::class,'store'])->name('store');



});









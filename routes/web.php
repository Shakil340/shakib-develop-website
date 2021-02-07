<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Contact\ContactController;
use App\Http\Controllers\Admin\Contact\SubjectController;
use App\Http\Controllers\Admin\ExpertController;
use App\Http\Controllers\Admin\FreeTrialController;
use App\Http\Controllers\Admin\HomeServiceController;
use App\Http\Controllers\Admin\HomeServiceSubTitleController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\RecentWorkController;
use App\Http\Controllers\User\dashboardController;
use App\Http\Controllers\User\OrderController;
use App\Models\HomeServiceSubTitle;
use Illuminate\Support\Facades\Auth;
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



//User Panel Route
//Route::get('user/login',[dashboardController::class,'index'])->name('login.user');
//Route::post('store',[dashboardController::class,'store'])->name('store');
//Route::get('/user/dashboard',[dashboardController::class,'dashboard'])->name('user.dashboard');
//Route::get('/user/logout',[dashboardController::class,'logout'])->name('user.logout');


//User Register

//Route::post('user/register',[dashboardController::class,'userStore'])->name('user.store');

//Admin Panel Route
//Route::prefix('admin/')->name('admin.')->group(function(){
//    Route::get('login',[AdminController::class,'index'])->name('show');
//});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeServiceController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin'],function (){
    Route::group(['middleware'=>'admin.guest'], function (){
        Route::view('login','Admin.login')->name('admin.login');
        Route::post('login',[AdminController::class,'login'])->name('admin.auth');
    });
    Route::group(['middleware'=>'admin.auth'], function (){
        Route::view('dashboard','Admin.master.dashboard')->name('admin.home');
        Route::post('logout',[AdminController::class,'logout'])->name('admin.logout');
    });
});
Route::group(['prefix'=>'user'],function (){
    Route::group(['middleware'=>'auth'], function (){
        Route::get('dashboard/new-order', function () {
            return view('User.dashboard');
        })->name('order-now');

        Route::get('dashboard', function () {
            return view('User.dashboard');
        })->name('user.dashboard');

        Route::get('create/new-order', function () {
            return view('User.Orders.add');
        })->name('create-order');
        Route::post('store',[OrderController::class,'store'])->name('order.store');
        Route::get('pending-order',[OrderController::class,'pending'])->name('order.pending');
        Route::get('complete-order',[OrderController::class,'complete'])->name('order.complete');
        Route::get('all-order',[OrderController::class,'all'])->name('order.all');
        Route::get('all-order/{id}',[OrderController::class,'allSoftDelete'])->name('order.allSoftDelete');
        Route::get('pending-order/{id}',[OrderController::class,'allSoftDeletePending'])->name('order.allSoftDeletePending');

    });

});

//Menu Page Routes
Route::get('/', function () {
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

Route::prefix('slider/')->name('slider.')->group(function(){
    Route::get('manage',[SliderController::class,'index'])->name('index');
    Route::get('create',[SliderController::class,'create'])->name('create');
    Route::post('store',[SliderController::class,'store'])->name('store');
    Route::get('edit/{id}',[SliderController::class,'edit'])->name('edit');
    Route::put('update',[SliderController::class,'update'])->name('update');
    Route::delete('delete/{id}',[SliderController::class,'delete'])->name('delete');
});


//HomeService Page Routes

Route::prefix('home-service')->name('home_service.')->group(function(){
    Route::get('/manage',[HomeServiceController::class,'index'])->name('index');
    Route::get('/create',[HomeServiceController::class,'create'])->name('create');
    Route::post('/store',[HomeServiceController::class,'store'])->name('store');
});

//Recent Work Page Routes

Route::prefix('recent-work')->name('recent_work.')->group(function(){
    Route::get('/manage',[RecentWorkController::class,'index'])->name('index');
    Route::get('/create',[RecentWorkController::class,'create'])->name('create');
    Route::post('/store',[RecentWorkController::class,'store'])->name('store');
});

//Expert Work Page Routes

Route::prefix('expert-work')->name('expert_work.')->group(function(){
    Route::get('/manage',[ExpertController::class,'index'])->name('index');
    Route::get('/create',[ExpertController::class,'create'])->name('create');
    Route::post('/store',[ExpertController::class,'store'])->name('store');
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

//Protfolliow Page Routes

Route::prefix('portfolliow')->name('portfolliow.')->group(function(){
    Route::get('/manage',[PortfolioController::class,'index'])->name('index');
    Route::post('/store',[PortfolioController::class,'store'])->name('store');

});

//Home Service Sub Title Page Routes

Route::prefix('home-service-sub-title')->name('home-sub.')->group(function(){
    Route::get('/manage',[HomeServiceSubTitleController::class,'index'])->name('index');
    Route::get('/create',[HomeServiceSubTitleController::class,'create'])->name('create');
    Route::post('/store',[HomeServiceSubTitleController::class,'store'])->name('store');

});

//Category Page Routes

Route::prefix('category')->name('category.')->group(function(){
    Route::get('/manage',[CategoryController::class,'index'])->name('index');
    Route::get('/create',[CategoryController::class,'create'])->name('create');
    Route::post('/store',[CategoryController::class,'store'])->name('store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::delete('/delete/{id}',[CategoryController::class,'delete'])->name('delete');
    Route::put('/update',[CategoryController::class,'update'])->name('update');

});


//Contact-Us Page Routes







Route::prefix('user')->name('user.')->group(function(){
    Route::get('/dashboard',[dashboardController::class,'index'])->name('index');
    Route::post('/logout',[dashboardController::class,'logout'])->name('logout');


});

//Free-Trial Page Routes

Route::prefix('free-trial')->name('free-trial.')->group(function(){
    Route::get('/manage',[FreeTrialController::class,'index'])->name('index');
    Route::post('/store',[FreeTrialController::class,'store'])->name('store');
    Route::get('/single/{id}',[FreeTrialController::class,'single'])->name('single');
    Route::get('/download/{id}',[FreeTrialController::class,'download'])->name('download');



});











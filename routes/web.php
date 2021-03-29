<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BackgroundRemoveController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorCorrectionController;
use App\Http\Controllers\Admin\Contact\ContactController;
use App\Http\Controllers\Admin\Contact\SubjectController;
use App\Http\Controllers\Admin\ExpertController;
use App\Http\Controllers\Admin\FreeTrialController;
use App\Http\Controllers\Admin\HomeServiceController;
use App\Http\Controllers\Admin\HomeServiceSubTitleController;
use App\Http\Controllers\Admin\ImageRetouchingController;
use App\Http\Controllers\Admin\LogoDesignController;
use App\Http\Controllers\Admin\PhotoResizingController;
use App\Http\Controllers\Admin\ProtfolliowController;
use App\Http\Controllers\Admin\RasterToVectorController;
use App\Http\Controllers\Admin\RecentWorkController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\User\dashboardController;
use App\Http\Controllers\User\OrderController;
use App\Models\Protfolliow;
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


// Auth::routes(['verify' => true]);
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
        Route::get('all-orders',[OrderController::class,'adminAll'])->name('admin.order');
        Route::get('order-edit/{id}',[OrderController::class,'edit'])->name('admin.order.edit');
        Route::put('order-update',[OrderController::class,'update'])->name('admin.order.update');
        Route::get('order-single/{id}',[OrderController::class,'single'])->name('admin.order.single');
        Route::get('order-download/{id}',[OrderController::class,'download'])->name('admin.order.download');
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


Route::group(['prefix'=>'service','as'=>'service.'], function(){

Route::prefix('photoshop')->name('photoshop.')->group(function(){

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

});


Route::prefix('illustrator')->name('illustrator.')->group(function(){
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
});

//Slider Page Routes

Route::prefix('slider/')->name('slider.')->middleware('admin.auth')->group(function(){
    Route::get('manage',[SliderController::class,'index'])->name('index');
    Route::get('create',[SliderController::class,'create'])->name('create');
    Route::post('store',[SliderController::class,'store'])->name('store');
    Route::get('edit/{id}',[SliderController::class,'edit'])->name('edit');
    Route::put('update',[SliderController::class,'update'])->name('update');
    Route::delete('delete/{id}',[SliderController::class,'delete'])->name('delete');
});


//HomeService Page Routes

Route::prefix('home-service')->name('home_service.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[HomeServiceController::class,'search'])->name('index');
    Route::get('/create',[HomeServiceController::class,'create'])->name('create');
    Route::post('/store',[HomeServiceController::class,'store'])->name('store');
});

//Recent Work Page Routes

Route::prefix('recent-work')->name('recent_work.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[RecentWorkController::class,'index'])->name('index');
    Route::get('/create',[RecentWorkController::class,'create'])->name('create');
    Route::post('/store',[RecentWorkController::class,'store'])->name('store');
});

//Expert Work Page Routes

Route::prefix('expert-work')->name('expert_work.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[ExpertController::class,'index'])->name('index');
    Route::get('/create',[ExpertController::class,'create'])->name('create');
    Route::post('/store',[ExpertController::class,'store'])->name('store');
});

//Subject Page Routes

Route::prefix('contact-us')->name('contact-us.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[SubjectController::class,'index'])->name('index');
    Route::get('/create',[SubjectController::class,'create'])->name('create');
    Route::post('/store',[SubjectController::class,'store'])->name('store');
    Route::get('/edit/{id}',[SubjectController::class,'edit'])->name('edit');
    Route::delete('/delete/{id}',[SubjectController::class,'delete'])->name('delete');
    Route::put('/update',[SubjectController::class,'update'])->name('update');
});


//Contact-Us Page Routes

Route::prefix('contact')->name('contact.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[ContactController::class,'index'])->name('index');
    Route::post('/store',[ContactController::class,'store'])->name('store');

});

//Protfolliow Page Routes

Route::prefix('portfolio')->name('portfolio.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[ProtfolliowController::class,'index'])->name('index');
    Route::get('create',[ProtfolliowController::class,'create'])->name('create');
    Route::post('store',[ProtfolliowController::class,'store'])->name('store');
    Route::get('edit/{id}',[ProtfolliowController::class,'edit'])->name('edit');
    Route::put('update',[ProtfolliowController::class,'update'])->name('update');
    Route::delete('delete/{id}',[ProtfolliowController::class,'delete'])->name('delete');

});


//Image Retouching Page Routes

Route::prefix('image-retouching')->name('retouching.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[ImageRetouchingController::class,'index'])->name('index');
    Route::get('create',[ImageRetouchingController::class,'create'])->name('create');
    Route::post('store',[ImageRetouchingController::class,'store'])->name('store');
    Route::get('edit/{id}',[ImageRetouchingController::class,'edit'])->name('edit');
    Route::put('update',[ImageRetouchingController::class,'update'])->name('update');
    Route::delete('delete/{id}',[ImageRetouchingController::class,'delete'])->name('delete');

});

//Background Remove Page Routes

Route::prefix('background-remove')->name('background.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[BackgroundRemoveController::class,'index'])->name('index');
    Route::get('create',[BackgroundRemoveController::class,'create'])->name('create');
    Route::post('store',[BackgroundRemoveController::class,'store'])->name('store');
    Route::get('edit/{id}',[BackgroundRemoveController::class,'edit'])->name('edit');
    Route::put('update',[BackgroundRemoveController::class,'update'])->name('update');
    Route::delete('delete/{id}',[BackgroundRemoveController::class,'delete'])->name('delete');

});

//Photo Resizing Page Routes

Route::prefix('photo-resizing')->name('photo.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[PhotoResizingController::class,'index'])->name('index');
    Route::get('create',[PhotoResizingController::class,'create'])->name('create');
    Route::post('store',[PhotoResizingController::class,'store'])->name('store');
    Route::get('edit/{id}',[PhotoResizingController::class,'edit'])->name('edit');
    Route::put('update',[PhotoResizingController::class,'update'])->name('update');
    Route::delete('delete/{id}',[PhotoResizingController::class,'delete'])->name('delete');

});


//Color Correction Page Routes

Route::prefix('color-correction')->name('color.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[ColorCorrectionController::class,'index'])->name('index');
    Route::get('create',[ColorCorrectionController::class,'create'])->name('create');
    Route::post('store',[ColorCorrectionController::class,'store'])->name('store');
    Route::get('edit/{id}',[ColorCorrectionController::class,'edit'])->name('edit');
    Route::put('update',[ColorCorrectionController::class,'update'])->name('update');
    Route::delete('delete/{id}',[ColorCorrectionController::class,'delete'])->name('delete');

});


//Logo Design Page Routes

Route::prefix('logo-design')->name('logo.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[LogoDesignController::class,'index'])->name('index');
    Route::get('create',[LogoDesignController::class,'create'])->name('create');
    Route::post('store',[LogoDesignController::class,'store'])->name('store');
    Route::get('edit/{id}',[LogoDesignController::class,'edit'])->name('edit');
    Route::put('update',[LogoDesignController::class,'update'])->name('update');
    Route::delete('delete/{id}',[LogoDesignController::class,'delete'])->name('delete');

});


//Raster To Vector Page Routes

Route::prefix('raster-to-vector')->name('raster.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[RasterToVectorController::class,'index'])->name('index');
    Route::get('create',[RasterToVectorController::class,'create'])->name('create');
    Route::post('store',[RasterToVectorController::class,'store'])->name('store');
    Route::get('edit/{id}',[RasterToVectorController::class,'edit'])->name('edit');
    Route::put('update',[RasterToVectorController::class,'update'])->name('update');
    Route::delete('delete/{id}',[RasterToVectorController::class,'delete'])->name('delete');

});

//Home Service Sub Title Page Routes

Route::prefix('home-service-sub-title')->name('home-sub.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[HomeServiceSubTitleController::class,'index'])->name('index');
    Route::get('/create',[HomeServiceSubTitleController::class,'create'])->name('create');
    Route::post('/store',[HomeServiceSubTitleController::class,'store'])->name('store');

});

//Category Page Routes

Route::prefix('category')->name('category.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[CategoryController::class,'index'])->name('index');
    Route::get('/create',[CategoryController::class,'create'])->name('create');
    Route::post('/store',[CategoryController::class,'store'])->name('store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::delete('/delete/{id}',[CategoryController::class,'delete'])->name('delete');
    Route::put('/update',[CategoryController::class,'update'])->name('update');

});

//Service Page Routes

Route::prefix('service')->name('service.')->middleware('admin.auth')->group(function(){
    Route::get('/manage',[ServiceController::class,'index'])->name('index');
    Route::get('/create',[ServiceController::class,'create'])->name('create');
    Route::post('/store',[ServiceController::class,'store'])->name('store');
    Route::get('/edit/{id}',[ServiceController::class,'edit'])->name('edit');
    Route::delete('/delete/{id}',[ServiceController::class,'delete'])->name('delete');
    Route::put('/update',[ServiceController::class,'update'])->name('update');

});


//User Page Routes
Route::prefix('user')->name('user.')->group(function(){
    Route::get('/dashboard',[dashboardController::class,'index'])->name('index');
    Route::post('/logout',[dashboardController::class,'logout'])->name('logout');


});

//Free-Trial Page Routes
Route::prefix('free-trial')->name('free-trial.')->group(function (){
    Route::middleware('admin.auth')->group(function(){
        Route::get('/manage',[FreeTrialController::class,'index'])->name('index');

        Route::get('/single/{id}',[FreeTrialController::class,'single'])->name('single');
        Route::get('/download/{id}',[FreeTrialController::class,'download'])->name('download');
});
    Route::post('/store',[FreeTrialController::class,'store'])->name('store');
});






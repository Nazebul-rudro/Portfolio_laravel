<?php

use App\Http\Controllers\AboutMecontroller;
use App\Http\Controllers\ConsultentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Fonted\Fontendcontroller;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProtfolioProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return view('backend.profile.index');
})->name('admin');
// Route::get('/fdashboard', function () {
//     return view('backend.profile.dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('backend.profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function(){
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/slider/create', [SliderController::class, 'store'])->name('slider.store');
Route::get('/slider/update/{slider}', [SliderController::class, 'edit'])->name('slider.edit');
Route::patch('/slider/{slider}', [SliderController::class, 'update'])->name('slider.update');
Route::delete('/slider/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');
// 
// active deactive
Route::post('/active/{slider}', [SliderController::class, 'sliderActive'])->name('slider.active');
Route::post('/deactive/{slider}', [SliderController::class, 'sliderDeactive'])->name('slider.deactive');



// about me
Route::get('/abouts',[AboutMecontroller::class, 'index'])->name('abouts.index');
Route::get('/abouts/create',[AboutMecontroller::class, 'create'])->name('abouts.create');
Route::post('/abouts/create',[AboutMecontroller::class, 'store'])->name('abouts.store');
Route::get('/abouts/update/{about}',[AboutMecontroller::class, 'edit'])->name('abouts.edit');
Route::patch('/abouts/update/{about}',[AboutMecontroller::class, 'update'])->name('abouts.update');
Route::delete('/abouts/{about}',[AboutMecontroller::class, 'destroy'])->name('abouts.destroy');


//service
Route::get('/service',[ServiceController::class, 'index'])->name('service.index');
Route::get('service/create',[ServiceController::class, 'create'])->name('service.create');
Route::post('service/create',[ServiceController::class, 'store'])->name('service.store');
Route::get('service/{service}',[ServiceController::class, 'edit'])->name('service.edit');
Route::patch('service/{service}',[ServiceController::class, 'update'])->name('service.update');
Route::delete('service/{service}',[ServiceController::class, 'destroy'])->name('service.destroy');
// active deactive
Route::post('service/active{service}',[ServiceController::class, 'active'])->name('service.active');
Route::post('service/deactive{service}',[ServiceController::class, 'deactive'])->name('service.deactive');


// feedback
Route::get('/feedback',[FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/create',[FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/create',[FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/{review}',[FeedbackController::class, 'edit'])->name('feedback.edit');
Route::patch('/feedback/{review}',[FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{review}',[FeedbackController::class, 'destroy'])->name('feedback.destroy');

// footer
Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
Route::get('/footer/create', [FooterController::class, 'create'])->name('footer.create');
Route::post('/footer/create', [FooterController::class, 'store'])->name('footer.store');
Route::get('/footer/edit/{footer}', [FooterController::class, 'edit'])->name('footer.edit');
Route::patch('/footer/edit/{footer}', [FooterController::class, 'update'])->name('footer.update');
Route::delete('/footer/edit/{footer}', [FooterController::class, 'destroy'])->name('footer.destroy');
Route::post('/footer/active/{footer}', [FooterController::class, 'active'])->name('footer.active');
Route::post('/footer/deactive/{footer}', [FooterController::class, 'deactive'])->name('footer.deactive');


// profile
Route::get('profile', [ProtfolioProfileController::class, 'index'])->name('profile.index');
Route::get('profile/create', [ProtfolioProfileController::class, 'create'])->name('profile.create');
Route::post('profile/create', [ProtfolioProfileController::class, 'store'])->name('profile.store');
Route::get('profile/edit/{number}', [ProtfolioProfileController::class, 'edit'])->name('profile.edit');
Route::patch('profile/{id}', [ProtfolioProfileController::class, 'update'])->name('profile.update');
// Route::patch('/profile/{id}', 'ProfileController@update')->name('profile.update');

Route::get('consultent', [ConsultentController::class, 'index'])->name('consultent.index');
Route::get('consultent/create', [ConsultentController::class, 'create'])->name('consultent.create');
Route::post('consultent/create', [ConsultentController::class, 'store'])->name('consultent.store');
Route::get('consultent/edit/{consult}', [ConsultentController::class, 'edit'])->name('consultent.edit');
Route::patch('consultent/edit/{consult}', [ConsultentController::class, 'update'])->name('consultent.update');
Route::delete('consultent/{consult}', [ConsultentController::class, 'destroy'])->name('consultent.destroy');

Route::delete('profile/{number}', [ProtfolioProfileController::class, 'destroy'])->name('profile.destroy');



// recive massage
Route::get('/message',[MassageController::class, 'index'])->name('message.index');
});
Route::post('/message',[MassageController::class, 'store'])->name('message.store');
Route::post('/contactmessage',[MassageController::class, 'contact'])->name('contactmessage.store');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return User::all()->count();
// });
Route::get('fontend', function(){
    return view('components.fontend.layouts.master');
} );

// Auth::routes(['register' => false]);
Route::get('/', [Fontendcontroller::class, 'index'])->name('home');

Route::get('/about',[Fontendcontroller::class, 'about'])->name('fontend.about');
Route::get('/services',[Fontendcontroller::class, 'service'])->name('fontend.service');
Route::get('/protfolio',[Fontendcontroller::class, 'protfolio'])->name('fontend.protfolio');
Route::get('/contact',[Fontendcontroller::class, 'contact'])->name('fontend.contact');
Route::get('/protfolio-details',[Fontendcontroller::class, 'protfolio_details'])->name('fontend.protfolio_details');






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\AboutMecontroller;
use App\Http\Controllers\ProfileController;
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

});

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
Route::get('/', function(){  
    return view('index');
} )->name('home');






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

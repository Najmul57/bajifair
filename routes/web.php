<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\QuickMasterController;
use App\Http\Controllers\Backend\SubAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    // return view('welcome');
    return view('frontend.home');
});



//admin panel
Route::get('/admin/dashboard', function () {

    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//quick master
Route::controller(QuickMasterController::class)->group(function () {
    Route::get('/quick-master', 'index')->name('quick.master');
    Route::post('/quick-master/store', 'store')->name('quick.store');
    Route::get('/quick-master/edit/{quickMaster}', 'edit')->name('quick.edit');
    Route::put('/quick-master/update/{quickMaster}', 'update')->name('quick.update');
    Route::get('/quick-master/destroy/{quickMaster}', 'destroy')->name('quick.destroy');
});

//quick master
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin');
    Route::post('/admin/store', 'store')->name('admin.store');
    Route::get('/admin/edit/{admin}', 'edit')->name('admin.edit');
    Route::put('/admin/update/{admin}', 'update')->name('admin.update');
    Route::get('/admin/destroy/{admin}', 'destroy')->name('admin.destroy');
});

//quick master
Route::controller(SubAdminController::class)->group(function () {
    Route::get('/subadmin', 'index')->name('subadmin');
    Route::post('/subadmin/store', 'store')->name('subadmin.store');
    Route::get('/subadmin/edit/{subadmin}', 'edit')->name('subadmin.edit');
    Route::put('/subadmin/update/{subadmin}', 'update')->name('subadmin.update');
    Route::get('/subadmin/destroy/{subadmin}', 'destroy')->name('subadmin.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

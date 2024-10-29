<?php

use App\Http\Controllers\Backend\QuickMasterController;
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

Route::middleware(['auth'])->prefix('admin')->group(function () {

    //quick master
    Route::prefix('quick')
        ->controller(QuickMasterController::class)
        ->group(function () {
            Route::get('/', 'index')->name('admin.quick.index');
            Route::post('/store', 'store')->name('admin.quick.store');
            Route::get('/edit/{id}', 'edit')->name('admin.quick.edit');
            Route::put('/update/{id}', 'update')->name('admin.quick.update');
            Route::get('/destroy/{quickMaster}', 'destroy')->name('admin.quick.destroy');
        });
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

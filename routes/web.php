<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerServiceController;
use App\Http\Controllers\Backend\MasterAgentController;
use App\Http\Controllers\Backend\QuickMasterController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SubAdminController;
use App\Http\Controllers\Backend\SuperAgentController;
use App\Http\Controllers\Backend\SupportController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//frontend controller
Route::get('/', [FrontendController::class, 'index']);

Route::get('/admin',[FrontendController::class,'adminFrontend'])->name('admin.frontend');
Route::get('/sub-admin',[FrontendController::class,'subadminFrontend'])->name('subadmin.frontend');
Route::get('/super',[FrontendController::class,'superFrontend'])->name('super.frontend');
Route::get('/master',[FrontendController::class,'masterFrontend'])->name('master.frontend');
Route::get('/rules',[FrontendController::class,'rulesFrontend'])->name('rules.frontend');
Route::get('customer',[FrontendController::class,'customerFrontend'])->name('customer.frontend');

Route::post('/search', [FrontendController::class, 'search'])->name('search');





//admin panel
Route::get('/admin/dashboard', function () {

    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->group(function () {


    //quick master
    Route::controller(QuickMasterController::class)->group(function () {
        Route::get('/quick-master', 'index')->name('quick.master');
        Route::post('/quick-master/store', 'store')->name('quick.store');
        Route::get('/quick-master/edit/{quickMaster}', 'edit')->name('quick.edit');
        Route::put('/quick-master/update/{quickMaster}', 'update')->name('quick.update');
        Route::get('/quick-master/destroy/{quickMaster}', 'destroy')->name('quick.destroy');
    });

   //quick master
   Route::controller(SupportController::class)->group(function () {
    Route::get('/support', 'index')->name('support');
    Route::post('/support/store', 'store')->name('support.store');
    Route::get('/support/edit/{support}', 'edit')->name('support.edit');
    Route::put('/support/update/{support}', 'update')->name('support.update');
    Route::get('/support/destroy/{support}', 'destroy')->name('support.destroy');
});

    //admin
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');
        Route::post('/admin/store', 'store')->name('admin.store');
        Route::get('/admin/edit/{admin}', 'edit')->name('admin.edit');
        Route::put('/admin/update/{admin}', 'update')->name('admin.update');
        Route::get('/admin/destroy/{admin}', 'destroy')->name('admin.destroy');
    });

    //sub admin
    Route::controller(SubAdminController::class)->group(function () {
        Route::get('/subadmin', 'index')->name('subadmin');
        Route::post('/subadmin/store', 'store')->name('subadmin.store');
        Route::get('/subadmin/edit/{subadmin}', 'edit')->name('subadmin.edit');
        Route::put('/subadmin/update/{subadmin}', 'update')->name('subadmin.update');
        Route::get('/subadmin/destroy/{subadmin}', 'destroy')->name('subadmin.destroy');
    });

    //super agent
    Route::controller(SuperAgentController::class)->group(function () {
        Route::get('/super-agent', 'index')->name('super.agent');
        Route::post('/super-agent/store', 'store')->name('super-agent.store');
        Route::get('/super-agent/edit/{superAgent}', 'edit')->name('super-agent.edit');
        Route::put('/super-agent/update/{superAgent}', 'update')->name('super-agent.update');
        Route::get('/super-agent/destroy/{superAgent}', 'destroy')->name('super-agent.destroy');
    });

    //master agent
    Route::controller(MasterAgentController::class)->group(function () {
        Route::get('/master-agent', 'index')->name('master.agent');
        Route::post('/master-agent/store', 'store')->name('master-agent.store');
        Route::get('/master-agent/edit/{masterAgent}', 'edit')->name('master-agent.edit');
        Route::put('/master-agent/update/{masterAgent}', 'update')->name('master-agent.update');
        Route::get('/master-agent/destroy/{masterAgent}', 'destroy')->name('master-agent.destroy');
    });

    //customer
    Route::controller(CustomerServiceController::class)->group(function () {
        Route::get('/customer', 'index')->name('customer');
        Route::post('/customer/store', 'store')->name('customer.store');
        Route::get('/customer/edit/{customer}', 'edit')->name('customer.edit');
        Route::put('/customer/update/{customer}', 'update')->name('customer.update');
        Route::get('/customer/destroy/{customer}', 'destroy')->name('customer.destroy');
    });

    //setting
    Route::controller(SettingsController::class)->group(function () {
        Route::get('/setting', 'index')->name('setting');
        Route::put('/setting/update/{setting}', 'update')->name('setting.update');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

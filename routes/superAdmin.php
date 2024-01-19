<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\SliderController;
use App\Http\Controllers\Common\UserController;
use App\Http\Controllers\SuperAdmin\PageController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\SettingController;

Route::group(['as'=>'superadmin.','prefix' =>'superadmin', 'middleware' => ['auth', 'superadmin']], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //slider
    Route::resource('sliders', SliderController::class);
    Route::post('slider-status', [SliderController::class, 'updateStatus'])->name('sliderStatus');

    ##page
    Route::resource('pages', PageController::class);
    Route::post('page-status', [PageController::class, 'updateStatus'])->name('pageStatus');

    // setting
    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::post('setting', [SettingController::class, 'settingUpdate'])->name('settingUpdate');

    Route::resource('users', UserController::class);

    //common
    include __DIR__ . '/common.php';
});

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\PurchanseController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::group(['prefix' => 'admin', 'middleware' => 'checkAdminAccess'], function () {
            Route::get('', [AdminController::class, 'index'])->name('dashboard.admin');
        });
        Route::group(['prefix' => 'customer', 'middleware' => 'checkCustomerAccess'], function () {
            Route::get('', [CustomerController::class, 'index'])->name('dashboard.customer');
        });
    });
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'โปรแกรมจองสลาก'], function () {
    Route::get('', [ProgramController::class, 'index'])->name('program');
});
Route::group(['prefix' => 'สั่งซื้อ'], function () {
    Route::get('', [PurchanseController::class, 'index'])->name('purchase');
});
Route::group(['prefix' => 'การใช้งาน'], function () {
    Route::get('', [GuideController::class, 'index'])->name('guide');
});
Route::group(['prefix' => 'ข่าวสาร'], function () {
    Route::get('', [BlogController::class, 'index'])->name('blog');
});
Route::group(['prefix' => 'ติดต่อ'], function () {
    Route::get('', [ContactController::class, 'index'])->name('contact');
});

Route::get('sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');
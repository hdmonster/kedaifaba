<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminAuthController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'authenticate'])->name('admin.authenticate');
    Route::middleware('auth')->group(function(){
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
        Route::get('/about', [AdminHomeController::class, 'about'])->name('admin.about');
        Route::post('/about', [AdminHomeController::class, 'storeAbout'])->name('admin.about.store');
        Route::get('/team', [AdminHomeController::class, 'team'])->name('admin.team');
        Route::post('/team', [AdminHomeController::class, 'storeTeam'])->name('admin.team.store');
        Route::get('/testimonials', [AdminHomeController::class, 'testimonials'])->name('admin.testimonials');
        Route::post('/testimonials', [AdminHomeController::class, 'storeTestimonials'])->name('admin.testimonials.store');
        Route::resource('product', AdminProductController::class, ['as' => 'admin']);
    });
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminTestimonialController;
use App\Http\Controllers\AdminMemberController;
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

Route::redirect('/admin', '/admin/login');

Route::prefix('admin')->group(function(){
  Route::get('/login', [AdminAuthController::class, 'login'])->name('admin.login');
  Route::post('/login', [AdminAuthController::class, 'authenticate'])->name('admin.authenticate');

  Route::middleware('auth')->group(function(){
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
        Route::resource('testimonial', AdminTestimonialController::class, ['as' => 'admin']);
        Route::resource('member', AdminMemberController::class, ['as' => 'admin']);
        Route::resource('product', AdminProductController::class, ['as' => 'admin']);
    });
});


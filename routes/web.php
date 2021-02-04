<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MainViewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\MainViewController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', function(){
    return view('frontend.contact');
});


Route::group(['middleware' => ['auth', 'isAdmin']],function(){
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::resource('/users', UsersController::class);

});

Route::group(['middleware' => ['auth', 'isVendor']],function(){
    Route::get('/vendor', function(){
        return view('vendor.dashboard');
    });

    Route::resource('/products', ProductsController::class);

    Route::get('/add-products', function () {
        return view('vendor.products.add');
    });

});

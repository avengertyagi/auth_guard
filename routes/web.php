<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\FrontedController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminloginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//user routes
Route::get('/', [FrontedController::class, 'index'])->name('index');
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/createRegister', [RegisterController::class, 'create'])->name('createRegister');
    Route::get('/login', [LoginController::class, 'showloginForm'])->name('login');
    Route::post('/createlogin', [LoginController::class, 'login'])->name('createlogin');
    Route::get('/welcome', [FrontedController::class, 'home'])->name('welcome');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});
//admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controller(AdminloginController::class)->group(function () {
        Route::get('/', 'showlogin');
        Route::post('/login', 'loginform')->name('login');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});

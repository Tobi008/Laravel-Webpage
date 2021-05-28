<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', [IndexController::class, 'home']);

Route::get('/about-us', [IndexController::class, 'aboutus']);

Route::get('/contact-us', [IndexController::class, 'contactus']);

Route::get('/pictures', [IndexController::class, 'pics']);

Route::get('/registration', [RegistrationController::class, 'register']);

Route::post('/registration', [RegistrationController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThinkController;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/index');
});

//Route::get('/think', function () {
//    dd('ssss');
//    return view('index');
//});
//Route::get('/think/index', function () {
//    dd('sss');
////    return view('think/index');
//});
Route::get('/think', [ThinkController::class, 'index']);
Route::get('/think/edit/{id}', [ThinkController::class, 'edit']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('redirect/{driver}', [App\Http\Controllers\Auth\LoginController::class,'redirectToProvider'])
    ->name('login.provider');
//    ->where('driver', implode('|', config('auth.socialite.drivers')));
Route::get('/callback/{provider}', [App\Http\Controllers\Auth\LoginController::class,'callback']);
//Route::get('callback/{driver}', [App\Http\Controllers\Auth\LoginController::class,'callback_social'])->name('callback.social');

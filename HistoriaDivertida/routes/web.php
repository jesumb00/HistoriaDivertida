<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ForgotPasswordController;
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
Route::view('/prueba', \App\Models\User::first());
Route::view('/', 'welcome');
Route::view('/product', 'shop/product');
Route::view('/visit', 'info/visit');

Route::view('/login', '/login/login')->middleware('guest');
Route::view('/forget', '/login/forget')->middleware('guest');

//Route::view('/shop.home','shop.home');

Route::view('/home','home')->middleware('auth');

Route::view('/shop','shop/welcome');

Route::post('/exist',[UsuarioController::class, 'exist']);
Route::post('/forgetPassword',[ForgotPasswordController::class, 'store']);
Route::view('/restart', '/login/forget_password')->middleware('guest');
Route::view('/confirmation', '/login/confirmation')->middleware('guest');
//Route::resource('categorias', UsuarioController::class);

Route::post('/closed',[UsuarioController::class, 'closed']);

Route::post('/store',[UsuarioController::class, 'store']);


Route::view('/create', '/login/registration');

Route::fallback(function () {
    return view('404');
});

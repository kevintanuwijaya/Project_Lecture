<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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

Route::get('/home', [MainController::class,'homePage']);

Route::get('/login',[MainController::class,'loginPage']);

Route::post('/login',[AuthController::class,'login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/register',[MainController::class,'registerPage']);

Route::post('/register',[AuthController::class,'register']);

Route::get('/edit', [MainController::class, 'editProfilePage']);

Route::post('/edit',[UserController::class,'editProfile']);

Route::get('/edit/password',[MainController::class,'editPasswordPage']);

Route::post('/edit/password',[UserController::class,'editPassword']);

Route::post('/comment',[CommentController::class,'insertComment']);

Route::post('/topup',[TopupController::class,'insertVoucher']);
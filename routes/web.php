<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


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

Route::get('/edit', [MainController::class, 'editPage']);

Route::post('/edit',[UserController::class,'edit']);

Route::post('/comment',[CommentController::class,'insertComment']);
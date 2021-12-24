<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    // $categories = Http::get("https://bilocker.000webhostapp.com/BiLocker/GetItemCategories.php");
    // dd(json_decode($categories));
    return view('layouts.home');
});

Route::get('/login',[MainController::class,'loginPage']);

Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[MainController::class,'registerPage']);

Route::post('/regitser',[AuthController::class,'register']);

Route::post('/edit',[UserController::class,'edit']);

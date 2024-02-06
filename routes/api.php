<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
   // Route::get('/posts',[CityController::class,'index']);
});
// Route::get('/posts',[CityController::class,'index']);

Route::get('/index', [CityController::class,'index']);

// Route::get('/city_scale',[CityController::class,'city_scale']);
Route::post('/posts',[CityController::class,'store']);
Route::post('/update/{id}',[CityController::class,'update']);
Route::get('/edit/{id}',[CityController::class,'show']);
Route::delete('/delete/{id}',[CityController::class,'destroy']);


Route::get('/city', [CityController::class,'city']);
Route::post('/create_city', [CityController::class,'Addcity']);
Route::get('/editcity/{id}',[CityController::class,'editcity']);
Route::post('/updatecity/{id}',[CityController::class,'updatecity']);





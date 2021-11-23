<?php

use App\Http\Controllers\API\RiceOfThePhilPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[\App\Http\Controllers\API\RiceOfThePhilControllerAPI::class,'login']);
Route::post('register',[\App\Http\Controllers\API\RiceOfThePhilControllerAPI::class,'register']);
Route::post('reset-password',[\App\Http\Controllers\API\RiceOfThePhilControllerAPI::class,'resetPassword']);


Route::get('get-all-posts',[RiceOfThePhilPostController::class,'getAllPosts']);
Route::get('get-post',[RiceOfThePhilPostController::class,'getPost']);
Route::get('search-post',[RiceOfThePhilPostController::class,'searchPost']);

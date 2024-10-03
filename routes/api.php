<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OptionController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\AchievementController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\EducatedController;
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



//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});
//all route api here muste be api authantiction
Route::post('login', [LoginController::class, 'login']);
Route::group(['middleware'=>'auth:sanctum'],function () {


  Route::apiResource('options', OptionController::class);
    
    Route::apiResource('achievements', AchievementController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('educated', EducatedController::class);
});



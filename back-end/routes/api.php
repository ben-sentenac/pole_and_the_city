<?php

use App\Http\Controllers\API\V1\CourseController;
use App\Http\Controllers\API\V1\DiciplineController;
use App\Http\Controllers\API\V1\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {

    Route::get('/diciplines', [DiciplineController::class, 'index']);
    Route::get('/diciplines/{dicipline}', [DiciplineController::class, 'show']);
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/{course}', [CourseController::class, 'show']);
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{event}', [EventController::class, 'show']);

    Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
        Route::apiResource('/diciplines', App\Http\Controllers\API\V1\Admin\DiciplineContoller::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/courses', App\Http\Controllers\API\V1\Admin\CourseContoller::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/events', App\Http\Controllers\API\V1\Admin\EventContoller::class)->only(['store', 'update', 'destroy']);
    });

    Route::post('/login',App\Http\Controllers\API\V1\Auth\LoginController::class);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

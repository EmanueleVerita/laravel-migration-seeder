<?php

use App\Http\Controllers\Api\TrainController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::name('api')->group(function() {

    Route::name('trains')
        ->prefix('trains')
        ->group(function () {

            Route::get('/' , [TrainController::class, 'index'])->name('index');

           // Route::get('/trains' , [TraiController::class, 'show'])->name('show');

    });
});

    

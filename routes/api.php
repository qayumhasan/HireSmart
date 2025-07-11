<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
Route::middleware('auth:sanctum','role:admin')->group(function(){
    Route::apiResource('/jobs',\App\Http\Controllers\Api\JobManagementController::class);

    // View jobs (public)
    Route::get('/job/search', [\App\Http\Controllers\Api\CandidateController::class, 'index']);

    // Apply to a job
    Route::post('/jobs/{job}/apply', [\App\Http\Controllers\Api\CandidateController::class, 'apply']);

    Route::get('/locations',[\App\Http\Controllers\Api\OptionController::class, 'locations']);

    Route::post('/location/store',[\App\Http\Controllers\Api\OptionController::class, 'locationStore']);

    Route::get('/location/edit/{location}',[\App\Http\Controllers\Api\OptionController::class, 'locationEdit']);

    Route::put('/location/update/{location}',[\App\Http\Controllers\Api\OptionController::class, 'locationUpdate']);

    Route::delete('/location/delete/{location}',[\App\Http\Controllers\Api\OptionController::class, 'locationDelete']);

    // ==================================================================


    Route::get('/skills',[\App\Http\Controllers\Api\OptionController::class, 'skills']);

    Route::post('/skill/store',[\App\Http\Controllers\Api\OptionController::class, 'skillStore']);

    Route::get('/skill/edit/{skill}',[\App\Http\Controllers\Api\OptionController::class, 'skillEdit']);

    Route::put('/skill/update/{skill}',[\App\Http\Controllers\Api\OptionController::class, 'skillUpdate']);

    Route::delete('/skill/delete/{skill}',[\App\Http\Controllers\Api\OptionController::class, 'skillDelete']);

});

 Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AuthController,
    CandidateController,
    JobManagementController,
    ApplicationController,
    OptionController,
    AdminController
};


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

// Authenticated user routes
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/me',     [AuthController::class, 'me']);
    Route::post('/logout',[AuthController::class, 'logout']);

    Route::get('/stats',[AdminController::class, 'index']);

    // Jobs
    Route::apiResource('/jobs', JobManagementController::class);

    // CandidateController
    Route::controller(CandidateController::class)->group(function () {
        Route::get('/job/list', 'jobList');
        Route::post('/jobs/search', 'search');
        Route::post('/jobs/{job}/apply', 'apply');
        Route::post('/profile/update', 'profileUpdate');
    });

    // ApplicationController
    Route::controller(ApplicationController::class)->group(function () {
        Route::get('/jobs/{application}/view', 'applicationView');
    });

    // Location Routes (OptionController)
    Route::controller(OptionController::class)->group(function () {
        Route::get('/locations', 'locations');
        Route::post('/location/store', 'locationStore');
        Route::get('/location/edit/{location}', 'locationEdit');
        Route::put('/location/update/{location}', 'locationUpdate');
        Route::delete('/location/delete/{location}', 'locationDelete');
    });

    // Skill Routes (OptionController)
    Route::controller(OptionController::class)->group(function () {
        Route::get('/skills', 'skills');
        Route::post('/skill/store', 'skillStore');
        Route::get('/skill/edit/{skill}', 'skillEdit');
        Route::put('/skill/update/{skill}', 'skillUpdate');
        Route::delete('/skill/delete/{skill}', 'skillDelete');
    });
});


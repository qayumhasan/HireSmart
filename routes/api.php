<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/jobs',\App\Http\Controllers\Api\JobManagementController::class);

 // View jobs (public)
 Route::get('/job/search', [\App\Http\Controllers\Api\CandidateController::class, 'index']);

 // Apply to a job
 Route::post('/jobs/{job}/apply', [\App\Http\Controllers\Api\CandidateController::class, 'apply']);

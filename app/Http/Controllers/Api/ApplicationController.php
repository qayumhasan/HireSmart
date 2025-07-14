<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Http\Resources\JobApplicationResource;

class ApplicationController extends Controller
{
    public  function applicationView(JobApplication $application)
    {
        $application->load('user.skills');
        return response()->json([
            'message' => 'Application fetched successfully',
            'application' => new JobApplicationResource($application),
        ]);
    }
}

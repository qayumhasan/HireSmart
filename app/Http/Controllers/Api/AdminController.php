<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobManagement;
use App\Models\JobApplication;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobsQuery = JobManagement::where('is_active', 1)
        ->whereDate('expires_at', '>=', Carbon::today());

    $activeJobsCount = $jobsQuery->count();

    $totalApplicationsCount = $jobsQuery->withCount('applications')
        ->get()
        ->sum('applications_count');

        $distinctUsersAppliedCount = JobApplication::whereHas('job', function ($query) {
            $query->where('is_active', 1)
                  ->whereDate('expires_at', '>=', Carbon::today());
        })->distinct('user_id')->count('user_id');

    return response()->json([
        'active_jobs' => $activeJobsCount,
        'applications_on_active_jobs' => $totalApplicationsCount,
        'total_users' => $distinctUsersAppliedCount,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\CandidateRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\JobManagement;
use App\Http\Requests\JobManagementRequest;
use Illuminate\Support\Facades\DB;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class CandidateRepository implements CandidateRepositoryInterface
{
    /**
     * Show all jobs search result
     * @return Collection
     */
    public function search(Request $request): Collection
    {
        $query = JobManagement::query()
            ->when(
                $request->has('keyword') && !empty($request->input('keyword')),
                function ($query) use ($request) {
                    $query->where(function ($q) use ($request) {
                        $q->where('title', 'like', '%' . $request->keyword . '%')
                          ->orWhere('description', 'like', '%' . $request->keyword . '%');
                    });
                }
            )
            ->when(
                $request->has('location_id') && !empty($request->location_id),
                function ($query) use ($request) {
                    $query->where('location_id', $request->location_id);
                }
            );

        return $jobs = $query->with(['location', 'skills'])->where('is_active', 1)
        ->whereDate('expires_at', '>=', Carbon::today())->latest()->get();
    }

    /**
     * apply to the job
     * @param Request $request
     * @param JobManagement $job
     *
     * @return [type]
     */
    public function apply(Request $request, JobManagement $job)
    {
        $request->validate([
            'cover' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $userId = auth()->id();

        if ($this->hasUserAlreadyApplied($userId, $job->id)) {
            return response()->json([
                'message' => 'You have already applied for this job.'
            ], 409);
        }

        DB::beginTransaction();

        try {
            $resumePath = $request->file('resume')->store('resumes', 'public');

            $application = JobApplication::create([
                'user_id' => $userId,
                'job_id' => $job->id,
                'cover_letter' => $request->cover,
                'resume_path' => $resumePath,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Application submitted successfully.',
                'application' => $application,
            ], 201);

        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => 'Application submission failed.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * checked is user already applied this job
     * @param int $userId
     * @param int $jobId
     *
     * @return bool
     */
    protected function hasUserAlreadyApplied(int $userId, int $jobId): bool
    {
        return JobApplication::where('user_id', $userId)
            ->where('job_id', $jobId)
            ->exists();
    }


    /**
     * Get Latest Job For Candidate
     * @return Collection
     */
    public function latestJobs():Collection
    {
        return Cache::remember('recent_jobs', now()->addMinutes(5), function () {
            return JobManagement::with(['skills:id,name','location:id,name'])->where('is_active', 1)
            ->whereDate('expires_at', '>=', Carbon::today())->get();
        });

    }
}

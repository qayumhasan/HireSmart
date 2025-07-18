<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\JobManagementRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\JobManagement;
use App\Http\Requests\JobManagementRequest;
use Illuminate\Support\Facades\DB;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Cache;
use Exception;
use Illuminate\Http\Request;

class JobManagementRepository implements JobManagementRepositoryInterface
{
    /**
     * Show all jobs
     * @return Collection
     */
    public function Jobs(): Collection
    {
        return Cache::remember('recent_jobs', now()->addMinutes(5), function () {
            return JobManagement::with(['skills:id,name', 'location:id,name'])
                ->when(auth()->user()->role !== 'admin', function ($query) {
                    $query->where('employer_id', auth()->user()->id);
                })
                ->orderBy('expires_at', 'DESC')
                ->get();
        });
    }

    /**
     * Store all job
     * @param JobManagementRequest $request
     *
     * @return JobManagement
     */
    public function store(JobManagementRequest $request): JobManagement
    {
        DB::beginTransaction();

        try {

            $validated = $request->validated();
            $validated['posted_at'] = $validated['posted_at'] ?? now();
            $validated['employer_id'] = $request->user()->id;

            $job = JobManagement::create($validated);

            if (!empty($validated['skills'])) {
                $job->skills()->attach($validated['skills']);
            }
            DB::commit();
            $job->load(['skills:id,name']);
            Cache::forget('recent_jobs');
            return $job;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    /**
     * Get Job By ID
     * @param mixed $id
     *
     * @return JobManagement
     */
    public function jobByID($id):JobManagement
    {
        return JobManagement::select('id','title',
        'description',
        'min_salary',
        'max_salary',
        'is_active',
        'location_id',
        'posted_at',
        'expires_at')
    ->with(['skills:id,name','applications.user:id,name,email','location:id,name'])
    ->findOrFail($id);
    }


    /**
     * update job
     * @param JobManagementRequest $request
     * @param JobManagement $job
     *
     * @return JobManagement
     */
    public function update(JobManagementRequest $request, JobManagement $job): JobManagement
    {
        DB::beginTransaction();

        try {
            $validated = $request->validated();
            $validated['employer_id'] = $request->user()->id;
            $validated['posted_at'] = $validated['posted_at'] ?? now();

            $job->update($validated);

            if (!empty($validated['skills'])) {
                $job->skills()->sync($validated['skills']);
            }

            DB::commit();
            $job->load(['skills:id,name', 'location:id,name']);
            return $job;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }






}

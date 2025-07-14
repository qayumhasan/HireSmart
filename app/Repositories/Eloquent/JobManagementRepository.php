<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\JobManagementRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\JobManagement;
use App\Http\Requests\JobManagementRequest;
use Illuminate\Support\Facades\DB;
use App\Models\JobApplication;
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
        return JobManagement::with(['skills:id,name','locations:id,name'])->latest()->get();
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
            if (!empty($validated['locations'])) {
                $job->locations()->attach($validated['locations']);
            }
            if (!empty($validated['skills'])) {
                $job->skills()->attach($validated['skills']);
            }
            DB::commit();
            $job->load(['skills:id,name']);
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
        'posted_at',
        'expires_at')
    ->with(['skills:id,name','applications.user:id,name,email'])
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
            if (!empty($validated['locations'])) {
                $job->locations()->sync($validated['locations']);
            }
            if (!empty($validated['skills'])) {
                $job->skills()->sync($validated['skills']);
            }
            DB::commit();
            $job->load(['skills:id,name', 'locations:id,name']);
            return $job;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }






}

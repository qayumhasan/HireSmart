<?php

namespace App\Jobs;

use App\Models\JobManagement;
use App\Models\Candidate;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessCandidateMatch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public int $candidateId) {}

    public function handle(): void
    {
        $candidate = User::find($this->candidateId);
        if (! $candidate) return;

        $jobs = JobManagement::with(['skills:id,name','locations:id,name'])->get();

        foreach ($jobs as $job) {
            if ($this->isMatch($job, $candidate)) {
                Log::info("Candidate #{$candidate->id} matched Job #{$job->id}");
            }
        }
    }

    protected function isMatch($job, $candidate): bool
    {
        $jobSkills = $job->skills->pluck('id')->toArray();
        $candidateSkills = $candidate->skills->pluck('id')->toArray();
        $hasSkills = empty(array_diff($jobSkills, $candidateSkills));

        $locationMatch = $job->location === $candidate->preferred_location;
        $salaryMatch = $candidate->expected_salary >= $job->min_salary
                    && $candidate->expected_salary <= $job->max_salary;

        return $hasSkills && $locationMatch && $salaryMatch;
    }
}

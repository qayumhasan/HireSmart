<?php

namespace App\Repositories\Contracts;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\JobManagement;

interface CandidateRepositoryInterface
{
    public function search(Request $request): Collection;
    public function apply(Request $request, JobManagement $job);
    public function latestJobs():Collection;
}

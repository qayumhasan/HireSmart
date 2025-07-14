<?php

namespace App\Repositories\Contracts;
use Illuminate\Support\Collection;
use App\Models\JobManagement;
use App\Http\Requests\JobManagementRequest;
use Illuminate\Http\Request;

interface JobManagementRepositoryInterface
{
    public function Jobs(): Collection;
    public function store(JobManagementRequest $request): JobManagement;
    public function jobByID($id):JobManagement;
    public function update(JobManagementRequest $request, JobManagement $job): JobManagement;
}

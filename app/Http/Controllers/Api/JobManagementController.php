<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobManagement;
use Illuminate\Http\Request;

class JobManagementController extends Controller
{
 /**
 * @OA\Get(
 *     path="/api/jobs",
 *     tags={"Employers Job Management Bord"},
 *     summary="List all jobs",
 *     operationId="getJobs",
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Jobs fetched successfully"),
 *             @OA\Property(
 *                 property="jobs",
 *                 type="array",
 *                 @OA\Items(type="object")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Server error"
 *     )
 * )
 */

    public function index()
    {
        $jobs = JobManagement::latest()->get();

    return response()->json([
        'message' => 'Jobs fetched successfully',
        'jobs' => $jobs
    ]);
    }

   /**
 * @OA\Post(
 *     path="/api/jobs",
 *     summary="Create a new job",
 *     tags={"Employers Job Management Bord"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"employer_id", "title", "description"},
 *             @OA\Property(property="employer_id", type="integer", example=1),
 *             @OA\Property(property="title", type="string", example="Senior PHP Developer"),
 *             @OA\Property(property="description", type="string", example="We're looking for a Laravel developer."),
 *             @OA\Property(
 *                 property="location",
 *                 type="array",
 *                 @OA\Items(type="string"),
 *                 example={"1", "2"}
 *             ),
 *             @OA\Property(
 *                 property="required_skills",
 *                 type="array",
 *                 @OA\Items(type="string"),
 *                 example={"1", "2", "3"}
 *             ),
 *             @OA\Property(property="min_salary", type="number", format="float", example=50000),
 *             @OA\Property(property="max_salary", type="number", format="float", example=80000),
 *             @OA\Property(property="is_active", type="boolean", example=true),
 *             @OA\Property(property="posted_at", type="string", format="date-time", example="2025-06-29T10:00:00Z"),
 *             @OA\Property(property="expires_at", type="string", format="date-time", example="2025-07-29T10:00:00Z")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Job created successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Job created"),
 *             @OA\Property(property="job", type="object")
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized"
 *     )
 * )
 */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employer_id'      => 'required|exists:users,id',
            'title'            => 'required|string|max:255',
            'description'      => 'required|string',
            'locations'         => 'nullable|array',
            'locations.*'       => 'integer',
            'skills'  => 'nullable|array',
            'skills.*'=> 'integer',
            'min_salary'       => 'nullable|numeric',
            'max_salary'       => 'nullable|numeric',
            'is_active'        => 'boolean',
            'posted_at'        => 'nullable|date',
            'expires_at'       => 'nullable|date|after_or_equal:posted_at',
        ]);
        $validated['posted_at'] = $validated['posted_at'] ?? now();

        $job = JobManagement::create($validated);
        $job->locations()->attach($validated['locations']);
        $job->skills()->attach($validated['skills']);

        return response()->json([
            'message' => 'Job created successfully',
            'job' => $job
        ], 201);
    }

 /**
 * @OA\Get(
 *     path="/api/jobs/{id}",
 *     summary="Get a single job",
 *     tags={"Employers Job Management Bord"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Job ID",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Job found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Job fetched successfully"),
 *             @OA\Property(property="job", type="object")
 *         )
 *     ),
 *     @OA\Response(response=404, description="Job not found")
 * )
 */
public function show(JobManagement $job)
{
    return response()->json([
        'message' => 'Job fetched successfully',
        'job' => $job
    ]);
}


/**
 * @OA\Put(
 *     path="/api/jobs/{id}",
 *     summary="Update a job",
 *     tags={"Employers Job Management Bord"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Job ID",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="title", type="string", example="Updated Job Title"),
 *             @OA\Property(property="description", type="string", example="Updated job description"),
 *             @OA\Property(property="min_salary", type="number", example=60000),
 *             @OA\Property(property="max_salary", type="number", example=95000),
 *             @OA\Property(property="is_active", type="boolean", example=false)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Job updated successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Job updated successfully"),
 *             @OA\Property(property="job", type="object")
 *         )
 *     ),
 *     @OA\Response(response=404, description="Job not found"),
 *     @OA\Response(response=422, description="Validation error")
 * )
 */
public function update(Request $request, JobManagement $job)
{
   $validated = $request->validate([
        'employer_id'      => 'required|exists:users,id',
        'title'            => 'required|string|max:255',
        'description'      => 'required|string',
        'locations'         => 'nullable|array',
        'locations.*'       => 'integer',
        'skills'  => 'nullable|array',
        'skills.*'=> 'integer',
        'min_salary'       => 'nullable|numeric',
        'max_salary'       => 'nullable|numeric',
        'is_active'        => 'boolean',
        'posted_at'        => 'nullable|date',
        'expires_at'       => 'nullable|date|after_or_equal:posted_at',
    ]);
    $validated['posted_at'] = $validated['posted_at'] ?? now();

    
    $job->update($validated);
    $job->locations()->sync($validated['locations']);
    $job->skills()->sync($validated['skills']);

    return response()->json([
        'message' => 'Job updated successfully',
        'job' => $job
    ]);
}

/**
 * @OA\Delete(
 *     path="/api/jobs/{id}",
 *     summary="Delete a job",
 *     tags={"Employers Job Management Bord"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Job ID",
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Job deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Job deleted successfully")
 *         )
 *     ),
 *     @OA\Response(response=404, description="Job not found")
 * )
 */
public function destroy(JobManagement $job)
{
    $job->delete();

    return response()->json([
        'message' => 'Job deleted successfully'
    ]);
}

}

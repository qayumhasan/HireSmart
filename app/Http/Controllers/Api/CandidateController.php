<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobManagement;
use App\Models\JobApplication;

class CandidateController extends Controller
{
     /**
     * @OA\Get(
     *     path="/api/job/search",
     *     summary="List available jobs",
     *     tags={"Jobs"},
     *     security={{"sanctum":{}}},
     *     @OA\Parameter(
     *         name="keyword",
     *         in="query",
     *         description="Filter by keyword in job title",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="location",
     *         in="query",
     *         description="Filter by job location",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(type="object",
     *
     *         )
     *     )
     * )
     */
    public function index(Request $request)
    {

        $query = JobManagement::query()->where('is_active', true);

        if ($request->filled('keyword')) {
            $query->where('title', 'like', '%' . $request->keyword . '%');
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        return response()->json($query->latest()->paginate(10));
    }
/**
 * @OA\Post(
 *     path="/api/jobs/{job}/apply",
 *     summary="Apply to a job",
 *     tags={"Applications"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(
 *         name="job",
 *         in="path",
 *         description="ID of the job",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 required={"resume"},
 *                 @OA\Property(property="cover_letter", type="string"),
 *                 @OA\Property(
 *                     property="resume",
 *                     type="string",
 *                     format="binary",
 *                     description="PDF file"
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Application submitted",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="Application submitted successfully."),
 *             @OA\Property(
 *                 property="application",
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=123),
 *                 @OA\Property(property="user_id", type="integer", example=45),
 *                 @OA\Property(property="job_id", type="integer", example=10),
 *                 @OA\Property(property="cover_letter", type="string", example="I am very interested in this position."),
 *                 @OA\Property(property="resume_path", type="string", example="resumes/abc123.pdf"),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2025-06-30T12:34:56Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2025-06-30T12:34:56Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="The given data was invalid."),
 *             @OA\Property(
 *                 property="errors",
 *                 type="object",
 *                 example={"resume": {"The resume field is required."}}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="Bad request error message.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Server error",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="An unexpected error occurred.")
 *         )
 *     )
 * )
 */

    public function apply(Request $request, JobManagement $job)
    {
        $request->validate([
            'cover_letter' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        $alreadyApplied = JobApplication::where('user_id', 1)
        ->where('job_id', $job->id)
        ->exists();

    if ($alreadyApplied) {
        return response()->json([
            'message' => 'You have already applied for this job.'
        ], 409);
    }
        $resumePath = $request->file('resume')->store('resumes', 'public');

        $application = JobApplication::create([
            'user_id' => 1,
            'job_id' => $job->id,
            'cover_letter' => $request->cover_letter,
            'resume_path' => $resumePath,
        ]);

        return response()->json([
            'message' => 'Application submitted successfully.',
            'application' => $application,
        ], 201);
    }
}

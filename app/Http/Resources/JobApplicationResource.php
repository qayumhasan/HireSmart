<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'user_id'       => $this->user_id,
            'job_id'        => $this->job_id,
            'cover_letter'  => $this->cover_letter,
            'resume_path'   => asset('storage/'.$this->resume_path),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,

            'user' => [
                'id'                 => $this->user->id ?? null,
                'name'               => $this->user->name ?? null,
                'email'              => $this->user->email ?? null,
                'role'               => $this->user->role ?? null,
                'email_verified_at'  => $this->user->email_verified_at ?? null,
                'created_at'         => $this->user->created_at ?? null,
                'updated_at'         => $this->user->updated_at ?? null,
                'skills'             => $this->user->skills ?? [],
            ],
        ];
    }
}

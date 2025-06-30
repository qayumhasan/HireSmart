<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'user_id', 'job_id', 'cover_letter', 'resume_path',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobManagement extends Model
{
    protected $fillable = [
        'employer_id',
        'title',
        'description',
        'min_salary',
        'max_salary',
        'is_active',
        'posted_at',
        'expires_at',
    ];

    public function skills()
{
    return $this->morphToMany(Skill::class, 'skillable');
}

public function locations()
{
    return $this->morphToMany(Location::class, 'locationable');
}

    protected $casts = [
        'posted_at' => 'datetime',
        'expires_at' => 'datetime',
        'is_active' => 'boolean',
        'location' => 'array',
        'required_skills' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function jobs()
{
    return $this->morphedByMany(JobManagement::class, 'skillable');
}
public function users()
{
    return $this->morphedByMany(User::class, 'skillable');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function jobs()
{
    return $this->morphedByMany(JobManagement::class, 'locationable');
}
public function users()
{
    return $this->morphedByMany(User::class, 'locationables');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Location extends Model
{
    /**
     * @return [type]
     */
    public function jobs()
    {
        return $this->hasMany(JobManagement::class);
    }

    /**
     * @return [type]
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

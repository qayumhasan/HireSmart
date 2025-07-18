<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * @return [type]
     */
    public function jobs()
        {
            return $this->morphedByMany(JobManagement::class, 'skillable');
        }
        
    /**
     * @return [type]
     */
    public function users()
        {
            return $this->morphedByMany(User::class, 'skillable');
        }
}

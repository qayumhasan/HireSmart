<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobManagement extends Model
{
    protected $fillable = [
        'employer_id',
        'title',
        'description',
        'min_salary',
        'max_salary',
        'location_id',
        'is_active',
        'posted_at',
        'expires_at',
    ];

    /**
     *
     * @return [type]
     */
    public function skills()
    {
        return $this->morphToMany(Skill::class, 'skillable');
    }

    /**
     *
     * @return [type]
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     *
     * @return HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class,'job_id');
    }

    /**
     *
     * @return Attribute
     */
    public function postedAtFormatted(): Attribute
    {
        return Attribute::get(
            fn () => $this->posted_at?->format('M d, Y')
        );
    }

    /**
     *
     * @return Attribute
     */
    public function expiresAtFormatted(): Attribute
    {
        return Attribute::get(
            fn () => $this->expires_at?->format('M d, Y')
        );
    }

    protected $casts = [
        'posted_at' => 'datetime',
        'expires_at' => 'datetime',
        'is_active' => 'boolean'
    ];
}

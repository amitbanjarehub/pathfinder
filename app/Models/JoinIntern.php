<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinIntern extends Model
{
    protected $fillable = [

        'name',
        'email',
        'phone',
        'city',
        'status',
        'institution',

        'duration',
        'availability',
        'mode',

        'interests',
        'skills',
        'preferences',
        'traits',

        'why_join',
        'role_excitement',
        'experience_details',
        'learning_expectation',

        'resume',
        'portfolio',
    ];

    protected $casts = [
        'interests' => 'array',
        'skills' => 'array',
        'preferences' => 'array',
        'traits' => 'array',
    ];
}
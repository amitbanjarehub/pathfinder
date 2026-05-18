<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinTeam extends Model
{
    protected $fillable = [

        'name',
        'email',
        'phone',
        'city',
        'profession',
        'role',
        'reason',
    ];
}
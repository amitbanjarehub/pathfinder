<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinFranchise extends Model
{
    protected $fillable = [

        'name',
        'email',
        'phone',
        'city',
        'profession',
        'reason',
        'query',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TraitResult extends Model
{
    protected $guarded = [];

    public function attempt()
    {
        return $this->belongsTo(TestAttempt::class, 'test_attempt_id');
    }
}
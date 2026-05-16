<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestAttempt extends Model
{
    protected $guarded = [];     

    protected $casts = [
        'guest_details' => 'array',
    ];


    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }

    public function traitResults()
    {
        return $this->hasMany(TraitResult::class);
    }
}

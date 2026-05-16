<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $guarded = [];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function assigner()
    {
        return $this->belongsTo(User::class, 'assigner_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function testAttempt()
    {
        return $this->hasOne(TestAttempt::class);
    }

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}

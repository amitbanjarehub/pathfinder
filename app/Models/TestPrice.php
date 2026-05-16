<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestPrice extends Model
{
    protected $guarded = [];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}

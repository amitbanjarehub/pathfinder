<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'test_id',
        'title',
        'description',
        'time_limit',
        'order',
        'score_scale_id',
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class)->orderBy('order');
    }

    public function scoreScale()
    {
        return $this->belongsTo(ScoreScale::class);
    }
}

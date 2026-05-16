<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoreScaleRange extends Model
{
    protected $guarded = [];

    public function scale()
    {
        return $this->belongsTo(ScoreScale::class, 'score_scale_id');
    }
}

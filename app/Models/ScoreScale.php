<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoreScale extends Model
{
    protected $guarded = [];

    public function ranges()
    {
        return $this->hasMany(ScoreScaleRange::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}

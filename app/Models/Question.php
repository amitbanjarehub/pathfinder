<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class)->orderBy('order');
    }


}

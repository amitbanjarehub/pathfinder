<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $guarded = [];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class)->orderBy('order');
    }

  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = [];

    public function prices()
    {
        return $this->hasMany(TestPrice::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('order');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function attempts()
    {
        return $this->hasMany(TestAttempt::class);
    }

    public function questions()
    {
      return $this->hasMany(Question::class);
    }

    public function parts()
    {
      return $this->hasMany(Part::class);
    }
}

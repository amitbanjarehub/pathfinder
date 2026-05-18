<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TieupEnquiry extends Model
{
    protected $fillable = [
        'institution_name',
        'contact_person',
        'phone',
        'email',
        'city_state',
        'requirements',
    ];
}
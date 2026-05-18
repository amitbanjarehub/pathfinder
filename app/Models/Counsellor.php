<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email', 
        'phone',
        'city',
        'profession',
        'why_join',
        'status',
        'admin_notes'
    ];

    protected $casts = [
        'status' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Scope for pending applications
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    // Scope for accepted applications
    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }

    // Accessor for formatted created date
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d M, Y');
    }
}
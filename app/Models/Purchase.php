<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'user_id',
        'test_id',
        'test_code',
        'is_used',
        'price_paid',
        'transaction_id',
        'status',
        'allow_student_download',
        'purchased_by_student_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    /**
     * The student who purchased this test directly (not via counsellor)
     */
    public function purchasingStudent()
    {
        return $this->belongsTo(User::class, 'purchased_by_student_id');
    }
}

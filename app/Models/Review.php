<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'booking_request_id',
        'user_id',
        'reviewer_type',
        'rating',
        'comment',
    ];

    public function bookingRequest()
    {
        return $this->belongsTo(BookingRequest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sos_alert extends Model
{
    use HasFactory;

    protected $table = 'sos_alerts';

    protected $fillable = [
        'booking_id',
        'reported_by',
        'user_id',
        'provider_id',
        'emergency_type',
        'status',
        'latitude',
        'longitude',
        'admin_id',
        'admin_note',
        'resolved_at',
        'closed_at',
    ];

    protected $casts = [
        'latitude' => 'double',
        'longitude' => 'double',
        'resolved_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    /**
     * Booking Relationship
     */
    public function booking()
    {
        return $this->belongsTo(BookingRequest::class, 'booking_id');
    }

    /**
     * Passenger Relationship
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Driver Relationship
     */
    public function provider()
    {
        return $this->belongsTo(Driver::class, 'provider_id');
    }

    /**
     * Admin Relationship
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';

    protected $fillable = [
        'user_id',
        'cnic',
        'license_number',
        'license_expiry',
        'is_available',
        'is_online',
        'rating',
        'total_rides',
        'bank_name',
        'account_number',
        'account_title',
        'emergency_contact',
        'license_image',
        'vehicle_registration_image',
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'is_online' => 'boolean',
        'license_expiry' => 'date',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function bookings()
{
    return $this->hasMany(BookingRequest::class);
}

public function sosAlerts()
{
    return $this->hasMany(sos_alert::class, 'provider_id');
}
}

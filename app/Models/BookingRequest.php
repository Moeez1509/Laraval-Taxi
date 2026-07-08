<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    protected $table = 'booking_requests';

    protected $fillable = [
        'user_id',
        'request_type',
        'name',
        'email',
        'phone',
        'dropoff_name',
        'dropoff_phone',
        'pickup_address',
        'dropoff_address',
        'pickup_lat',
        'dropoff_lat',
        'pickup_lng',
        'dropoff_lng',
        'schedule_pickup_time',
        'service_type',
        'flight_number',
        'adults',
        'children',
        'baggage_small',
        'baggage_large',
        'final_fare',
        'driver_id',
        'status',
        'payment_status',
        'notes',
        'created_at',
        'updated_at'
    ];



    public function passenger()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function driver()
{
    return $this->belongsTo(Driver::class, 'driver_id');
}

public function sosAlerts()
{
    return $this->hasMany(sos_alert::class, 'booking_id');
}
}


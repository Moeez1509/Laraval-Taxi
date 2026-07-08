<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


#[Fillable(['name', 'email', 'phone', 'password', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'password',
        'role',
        'profile_image',
        'address',
        'DOB',
        'is_active',
        'is_verified',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'is_verified' => 'boolean',
        'is_online' => 'boolean',
        'license_expiry' => 'date',
    ];

   
    public function driver()
{
    return $this->hasOne(Driver::class);
}

public function bookings()
{
    return $this->hasMany(BookingRequest::class);
}

public function sosAlerts()
{
    return $this->hasMany(sos_alert::class, 'user_id');
}

public function handledSosAlerts()
{
    return $this->hasMany(sos_alert::class, 'admin_id');
}
}

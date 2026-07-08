<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Driver;
use App\Models\BookingRequest;
use App\Models\Review;
use App\Models\sos_alert;
use App\Http\Controllers\Api\Admin\DriverController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/user', function () {
    return User::all();
});
Route::get('/drivers', function () {
    return Driver::all();
});
Route::post('/booking_requests', function () {
    return BookingRequest::all();
});
Route::get('/booking_requests', function () {
    return BookingRequest::with(['passenger', 'driver','driver.user'])->get();
});
Route::get('/reviews', function () {
    return Review::all();
});
Route::get('/sos_alerts', function () {
    return sos_alert::with(['booking', 'user', 'provider.user', 'admin'])->get();
});
Route::get('/sos_alerts/{id}', function ($id) {
    return sos_alert::with([
        'booking',
        'user',
        'provider.user',
        'admin'
    ])->findOrFail($id);
});

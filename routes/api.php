<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Models\Driver;
use App\Models\BookingRequest;
use App\Models\Review;
use App\Models\sos_alert;
use App\Models\PushNotification;
use App\Models\ContactEnquiry;

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
    return BookingRequest::with(['passenger', 'driver', 'driver.user'])->get();
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
Route::get('/push_notifications', function () {
    return PushNotification::all();
});
Route::get('/contact_enquiries', function () {
    return ContactEnquiry::all();
});

Route::put('/contact_enquiries/{id}', function (Request $request, $id) {

    $enquiry = ContactEnquiry::findOrFail($id);

    $enquiry->status = $request->status;

    $enquiry->save();

    return response()->json([
        'success' => true,
        'message' => 'Status Updated Successfully'
    ]);

});
Route::get('/dashboard', [DashboardController::class, 'index']);


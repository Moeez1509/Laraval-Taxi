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
use App\Models\Complaints;

use App\Http\Controllers\Api\Admin\DriverController;
use App\Models\Complaint;

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
Route::put('/sos_alerts/{id}', function (Request $request, $id) {

    $sos = sos_alert::findOrFail($id);

    if (!$sos) {
        return response()->json([
            'message' => 'SOS Alert not found'
        ], 404);
    }

    $sos->status = $request->status;
    $sos->save();

    return response()->json($sos);

});
Route::get('/push_notifications', function () {
    return PushNotification::all();
});
Route::get('/complaints', function () {
    return Complaints::all();
});

Route::put('/complaints/{id}', function (Request $request, $id) {

    $Complaints = Complaints::findOrFail($id);

    $Complaints->status = $request->status;

    $Complaints->save();

    return response()->json([
        'success' => true,
        'message' => 'Status Updated Successfully'
    ]);

});
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/contact_enquiry', function () {
    return ContactEnquiry::all();
});
Route::put('/contact_enquiry/{id}', function (Request $request, $id) {

    $Contact = ContactEnquiry::findOrFail($id);

    $Contact->status = $request->status;

    $Contact->save();

    return response()->json([
        'success' => true,
        'message' => 'Status Updated Successfully'
    ]);

});

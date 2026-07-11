<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\Admin\DriverController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::post('/', [UserController::class, 'storeBooking'])->name('booking.store');
Route::get('/aboutus', [UserController::class, 'aboutus'])->name('aboutus');
Route::get('/blogs', [UserController::class, 'blogs'])->name('blogs');
Route::get('/faqs', [UserController::class, 'faqs'])->name('faqs');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');



Route::middleware('auth', 'verified')->group(function () {

    Route::get('/passenger_dashboard', [UserController::class, 'passengerDashboard'])->name('passenger_dashboard');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/ride_history', [UserController::class, 'rideHistory'])->name('ride_history');
    Route::get('/upcoming_jobs', [UserController::class, 'upcomingJobs'])->name('upcoming_jobs');

    Route::get('/coupons', [UserController::class, 'coupons'])->name('coupons');

    Route::get('/mywallet', [UserController::class, 'mywallet'])->name('mywallet');

    Route::get('/card', [UserController::class, 'card'])->name('card');

    Route::get('/manage_account', [UserController::class, 'manageAccount'])->name('manage_account');

    Route::get('/driver_home', [UserController::class, 'driverHome'])->name('driver_home');
    Route::get('/driver_history', [UserController::class, 'driverHistory'])->name('driver_history');

    Route::get('/manage_cards', [UserController::class, 'manageCards'])->name('manage_cards');
    Route::get('/manage_vehicle', [UserController::class, 'manageVehicle'])->name('manage_vehicle');
    Route::get('/manage_document', [UserController::class, 'manageDocument'])->name('manage_document');

    Route::get('/payout_setting', [UserController::class, 'payoutSetting'])->name('payout_setting');

    Route::get('/myprofile', [UserController::class, 'myprofile'])->name('myprofile');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/drivers', function(){
    return response()->json([
        'success' => true,
        'message' => 'Route Working'
    ]);
});


Route::get('/admin/passenger', [DriverController::class, 'index'])->name('admin.passenger');

Route::get('/admin/{any?}', function () {
    return response()->file(
        public_path('admin/build/index.html')
    );
})->where('any', '.*');
require __DIR__ . '/auth.php';

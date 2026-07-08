<?php
namespace App\Http\Controllers;
use App\Models\BookingRequest;
use App\Models\User;
use App\Models\Driver;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function dashboard()
    {
        return view('dashboard');
    }
    public function storeBooking(Request $request)
    {
        $validated = $request->validate([
            'request_type' => 'required|string|max:100',
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:50',
            'dropoff_name' => 'nullable|string|max:255',
            'dropoff_phone' => 'nullable|string|max:50',
            'pickup_address' => 'required|string|max:255',
            'dropoff_address' => 'required|string|max:255',
            'pickup_lat' => 'nullable|string|max:255',
            'pickup_lng' => 'nullable|string|max:255',
            'dropoff_lat' => 'nullable|string|max:255',
            'dropoff_lng' => 'nullable|string|max:255',
            'schedule_pickup_time' => 'nullable|date',
            'service_type' => 'nullable|string|max:255',
            'flight_number' => 'nullable|string|max:255',
            'baggage_small' => 'nullable|integer',
            'baggage_large' => 'nullable|integer',
            'adults' => 'nullable|integer',
            'children' => 'nullable|integer',
            'notes' => 'nullable|string|max:1000',
            'payment_status' => 'nullable|string|max:100',
            'promocode' => 'nullable|string|max:255',
        ]);

        BookingRequest::create([
            'request_type' => $validated['request_type'],
            'name' => trim($validated['firstname'] . ' ' . ($validated['lastname'] ?? '')),
            'email' => $validated['email'],
            'phone' => $validated['contact'],
            'dropoff_name' => $validated['dropoff_name'] ?? null,
            'dropoff_phone' => $validated['dropoff_phone'] ?? null,
            'pickup_address' => $validated['pickup_address'],
            'dropoff_address' => $validated['dropoff_address'],
            'pickup_lat' => $validated['pickup_lat'] ?? null,
            'pickup_lng' => $validated['pickup_lng'] ?? null,
            'dropoff_lat' => $validated['dropoff_lat'] ?? null,
            'dropoff_lng' => $validated['dropoff_lng'] ?? null,
            'schedule_pickup_time' => $validated['schedule_pickup_time'] ?? null,
            'service_type' => $validated['service_type'] ?? null,
            'flight_number' => $validated['flight_number'] ?? null,
            'baggage_small' => $validated['baggage_small'] ?? null,
            'baggage_large' => $validated['baggage_large'] ?? null,
            'adults' => $validated['adults'] ?? null,
            'children' => $validated['children'] ?? null,
            'notes' => $validated['notes'] ?? null,
            'payment_status' => $validated['payment_status'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Booking request saved successfully.');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function blogs()
    {
        return view('blogs');
    }
     public function faqs()
    {
        return view('faqs');
    }
      public function contact()
    {
        return view('contact');
    }
    public function passengerDashboard(){
        return view('passenger_dashboard');
    }
    public function profile(){
        return view('profile');
    }
     public function rideHistory(){
        return view('ride_history');
    }
    public function upcomingJobs(){
        return view('upcoming_jobs');
    }
    public function coupons(){
        return view ('coupons');
    }
    public function mywallet(){
        return view ('mywallet');
    }
    public function card(){
        return view ('card');
    }
    public function manageAccount(){
        return view('manage_account');
    }
     public function driverHome(){
        return view('driver_home');
    }
     public function driverHistory(){
        return view('driver_history');
    }
    public function manageCards(){
        return view('manage_cards');
    }
     public function manageVehicle(){
        return view('manage_vehicle');
    }
    public function manageDocument(){
        return view('manage_document');
    }
    public function payoutSetting(){
        return view('payout_setting');
    }
     public function myprofile(){
        return view('myprofile');
    }
}

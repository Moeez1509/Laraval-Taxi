<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $totalBookings = BookingRequest::count();
        $completedBookings = BookingRequest::where('status', 'completed')->count();
        $scheduledBookings = BookingRequest::where('status', 'scheduled')->count();
        $activeBookings = BookingRequest::whereIn('status', ['ongoing', 'picked', 'arriving','arriving','accepted','assigned'])->count();
        $cancelledBookings = BookingRequest::where('status', 'cancelled')->count();
        $acceptedJobs = BookingRequest::whereNotNull('driver_id')
    ->whereNotIn('status', ['completed', 'cancelled'])
    ->count();
    $acceptanceRate = 0;

$acceptanceRate = 0;

if ($totalBookings > 0) {

    $acceptanceRate = round(
        ($acceptedJobs / $totalBookings) * 100,
        2
    );

}
        $totalrevenue = BookingRequest::where('status', 'completed')->sum('final_fare');
        $cancelledrevenue = BookingRequest::where('status', 'cancelled')->sum('final_fare');
        $cashRevenue = BookingRequest::where('payment_status', 'cash')->count();
        $totalAmount = BookingRequest::where('status', 'completed')->sum(\DB::raw('final_fare + tip'));
        $scheduleAmount = BookingRequest::where('status', 'scheduled')->sum(\DB::raw('final_fare'));
      $commissionRate = 8;

$scheduleAmount = BookingRequest::where('status', 'scheduled')
    ->sum('final_fare');

$scheduleDriverAmount = $scheduleAmount * (100 - $commissionRate) / 100;
        $totaltip = BookingRequest::where('status', 'completed')->sum('tip');

        $totalDrivers = User::where('role', 'driver')->count();
        $totalUsers = User::where('role', 'passenger')->count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalmaleusers = User::where('gender', 'male')->where('role', 'passenger')->count();

        $totalmaledrivers = User::where('gender', 'male')->where('role', 'driver')->count();
        $totalfemaleusers = User::where('gender', 'female')->where('role', 'passenger')->count();



        return response()->json([
            'total_bookings' => $totalBookings,
            'completed_bookings' => $completedBookings,
            'scheduled_bookings' => $scheduledBookings,
            'active_bookings' => $activeBookings,
            'cancelled_bookings' => $cancelledBookings,
            'accepted_jobs' => $acceptedJobs,
            'acceptance_rate' => $acceptanceRate,
            'total_revenue' => $totalrevenue,
            'total_tip' => $totaltip,
            'total_amount' => $totalAmount,
            'scheduled_amount' => $scheduleAmount,
            'scheduled_driver_amount' => $scheduleDriverAmount,
            'cancelled_revenue' => $cancelledrevenue,
            'cash_revenue' => $cashRevenue,
            'total_users' => $totalUsers,
            'total_drivers' => $totalDrivers,
            'total_admins' => $totalAdmins,
            'total_male_users' => $totalmaleusers,
            'total_female_users' => $totalfemaleusers,
            'total_male_drivers' => $totalmaledrivers
        ]);
    }
}

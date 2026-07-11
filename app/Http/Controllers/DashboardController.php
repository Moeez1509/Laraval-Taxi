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
        $totalrevenue = BookingRequest::where('status', 'completed')->sum('final_fare');
        $cancelledrevenue = BookingRequest::where('status', 'cancelled')->sum('final_fare');
        $cashRevenue = BookingRequest::where('payment_status', 'cash')->count();

        $totalDrivers = User::where('role', 'driver')->count();
        $totalUsers = User::where('role', 'passenger')->count();
        $totalAdmins = User::where('role', 'admin')->count();
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
            'total_revenue' => $totalrevenue,
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

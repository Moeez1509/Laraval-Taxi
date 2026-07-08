<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reviews extends Controller
{
    public function reviews()
    {
        $reviews = Review::select(
            'booking_request_id',
            DB::raw("MAX(CASE WHEN reviewer_type = 'user' THEN rating END) as user_rating"),
            DB::raw("MAX(CASE WHEN reviewer_type = 'user' THEN comment END) as user_comment"),
            DB::raw("MAX(CASE WHEN reviewer_type = 'driver' THEN rating END) as provider_rating"),
            DB::raw("MAX(CASE WHEN reviewer_type = 'driver' THEN comment END) as provider_comment")
        )
        ->groupBy('booking_request_id')
        ->get();

        return response()->json($reviews);
    }
}

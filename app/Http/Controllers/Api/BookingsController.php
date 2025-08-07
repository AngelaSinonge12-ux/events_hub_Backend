<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $booking = Bookings::all();
        return response()->json($booking);
    }
    public function store(Request $request)
    {
        $booking = Bookings::create($request->all());
        return response()->json($booking, 201);
    }
    public function show(Bookings   $booking)
    {
        return response()->json($booking, 201);
    }
    public function update(Request $requests, Bookings $booking)
    {
        $booking->update($requests->all());
        return response()->json($booking);
    }

    public function destroy(Bookings $booking)
    {
        $booking->delete();
        return response()->json(null, 204);
    }
}

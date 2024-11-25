<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class booking_controller extends Controller
{
    //
    public function store(Request $request) {
        $request->validate([
            'meeting_room_id' => 'required|exists:meeting_rooms,id',
            'start_time' => 'required|date|after:now',
            'end_time' => 'required|date|after:start_time',
            'booked_by' => 'required|string|max:255'
        ]);

        Booking::create($request->all());
        return redirect()->back()->with('success', 'Sucessfully create booking');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\MeetingRoom;

class meeting_controller extends Controller
{
     //
     public function index() {
        $rooms = MeetingRoom::all();
        $bookings = Booking::all();
         return view('rooms.index', compact('rooms','bookings'));
     }
}

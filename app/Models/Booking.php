<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'Bookings';
    protected $fillable = [
        'meeting_room_id',
        'start_time',
        'end_time',
        'booked_by'
    ];
    
    public function meetingRoom() {
        return $this->belongsTo(MeetingRoom::class);
    }
}

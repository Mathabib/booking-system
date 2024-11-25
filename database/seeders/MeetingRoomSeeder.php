<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MeetingRoom;

class MeetingRoomSeeder extends Seeder
{
      /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MeetingRoom::create([
            'name' => 'Komodo Room',
            'description' => 'primary meeting room'
        ]);
        MeetingRoom::create([
            'name' => 'Tardis room',
            'description' => 'secondary meeting room'
        ]);
    }
}

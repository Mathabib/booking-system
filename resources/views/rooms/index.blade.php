<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Ruang Meeting</h1>
    @foreach($rooms as $room)
        <h2>{{ $room->name }}</h2>
        <p>{{ $room->description }}</p>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <input type="hidden" name="meeting_room_id" value="{{ $room->id }}">
            <label for="start_time">Waktu Mulai:</label>
            <input type="datetime-local" name="start_time" required>
            <label for="end_time">Waktu Selesai:</label>
            <input type="datetime-local" name="end_time" required>
            <label for="booked_by">Nama Pemesan:</label>
            <input type="text" name="booked_by" required>
            <button type="submit">Booking</button>
        </form>
    @endforeach

    <div>
        @foreach ($bookings as $booking)
            <p>{{ $booking->booked_by }}</p>
        @endforeach
    </div>
</body>
</html>
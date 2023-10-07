<?php
use Carbon\Carbon;

if (!function_exists('getStartAndEndDate')) {
    function getStartAndEndDate($v)
    {
        $d = explode(' ', $v);
        $start = Carbon::parse($d[0]);
        $end = Carbon::parse($d[2]);

        return compact('start','end');
    }
}
if (!function_exists('getBookingFormDetail')) {
    function getBookingFormDetail()
    {
        // return session('booking-form');
        // dd(request());
    }
}
if (!function_exists('countBookedRooms')) {
    function countBookedRooms($room_group_id, $start_date, $end_date)
    {



        $start = Carbon::parse($start_date)->format("Y-m-d");
        $end = Carbon::parse($end_date)->format("Y-m-d");

        $count = DB::table('room_bookings')
            // ->selectRaw('IFNULL(room_groups.no_of_rooms-room_groups.no_reserved_room-sum(room_bookings.quantity), (select (rg2.no_of_rooms-rg2.no_reserved_room) from room_groups rg2 where rg2.id=?)) as available_rooms',[$room_group_id])
            ->join('bookings', 'room_bookings.booking_id', '=', 'bookings.id')
            ->join('room_groups', 'room_bookings.room_group_id', '=', 'room_groups.id')
            ->whereDate('arrival_date', '<=', $end)
            ->whereDate('.departure_date', '>=', $start)
            ->whereDate('arrival_date', '!=', $end)
            ->whereDate('departure_date', '!=', $start)
            ->where('bookings.payment_status', '>', 0)
            ->where('room_groups.id', $room_group_id)->count();



        return (int) $count;
        // return (int)$count->available_rooms;
    }
}
if (!function_exists('toCarbon')) {
    function toCarbon($date)
    {
        return Carbon::parse($date);
    }
}
if (!function_exists('calculateNight')) {
    function calculateNight($start, $end)
    {
        $arrival = toCarbon($start);
        $departure = toCarbon($end);
        $night = $departure->diffInDays($arrival);
        return $night;
    }
}

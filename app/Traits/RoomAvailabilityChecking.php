<?php
namespace App\Traits;

use App\Models\Room;
use App\Models\RoomGroup;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

trait RoomAvailabilityChecking {


    public function checkAvaibility($hotel_id, $start, $end)
    {

        $bookedDates = [];
        $roomIds = [];
        // $rooms = RoomGroup::where('hotel_id',$hotel_id)->get();

        $rooms = RoomGroup::when($hotel_id,function($query) use($hotel_id){
            $query->where('hotel_id',$hotel_id);
        })->get();
        foreach($rooms as $room){

            $sum = DB::table('room_bookings')
                ->join('bookings', 'room_bookings.booking_id', '=', 'bookings.id')
                ->join('room_groups', 'room_bookings.room_group_id', '=', 'room_groups.id')
                ->where('room_bookings.hotel_id',$hotel_id)
                ->where('bookings.payment_status', '>', 0)
                ->where('room_groups.id', $room->id)
                ->whereDate('arrival_date', '<=', $end)
                ->whereDate('.departure_date', '>=', $start)
                ->whereDate('arrival_date', '!=', $end)
                ->whereDate('departure_date', '!=', $start)

                ->sum('room_bookings.quantity');

            $max = (int)$sum;



            $availables = $room->no_of_rooms - $room->no_reserved_room;


            if ($max >= $availables) {

                if (!in_array($room->id, $roomIds)) {

                    $roomIds[] = $room->id;
                }
            }
        }

        // $availables =  RoomGroup::whereNotIn('id',$roomIds)->where('is_offline', 0)
        //     ->orderByDesc('room_groups.id')->get() ;
        $availables = (count($roomIds) > 0)?   RoomGroup::where('hotel_id', $hotel_id)->whereNotIn('id',$roomIds)->where('is_offline', 0)
            ->orderByDesc('room_groups.id')->get() : $rooms ;
        return compact('availables','start','end');
    }
}

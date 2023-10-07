<?php

namespace App\Services\Booking;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomBooking;
use App\Models\RoomGroup;
use App\Models\User;
use App\Services\BaseService;
use App\Traits\RoomAvailabilityChecking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingService extends BaseService
{

    use RoomAvailabilityChecking;
    public function __construct(Booking $r)
    {
        parent::__construct($r);
    }

    public function getAllBookings($arr){
        $search = $arr['search'];
        $perPage = $arr['perPage'];
        $query = $this->allQuery($arr)
            ->join('users', 'room_bookings.user_id', '=', 'users.id')
        ->select('bookings.*','users.firstname','users.lastname','users.email')->orderBy('bookings.created_at','desc')
        ->paginate($perPage);
        return $this->success('all room Bookings',$query);
    }
}

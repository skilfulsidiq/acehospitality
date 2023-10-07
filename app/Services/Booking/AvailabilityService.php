<?php

namespace App\Services\Booking;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomGroup;
use App\Services\BaseService;
use App\Traits\RoomAvailabilityChecking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AvailabilityService extends BaseService{

    use RoomAvailabilityChecking;
    public function __construct(RoomGroup $r)
    {
        parent::__construct($r);
    }
    public function checkForRoomAvailability($arr){
        $hotel_id = $arr['hotel_id'];
        $date = getStartAndEndDate($arr['date']);
        $start_date = $date['start'];
        $end_date =$date['end'];
        $feedback = $this->checkAvaibility($hotel_id,$start_date,$end_date);
        return $this->success("availability result", $feedback);


    }
}


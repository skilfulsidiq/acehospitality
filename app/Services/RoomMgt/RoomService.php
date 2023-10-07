<?php
namespace App\Services\RoomMgt;

use App\Models\Room;
use App\Services\BaseService;

class RoomService extends BaseService{

    public function __construct(Room $r)
    {
        parent::__construct($r);
    }
    public function rooms($search)
    {
        $rooms = $this->allQuery($search)->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
            ->join('room_groups', 'rooms.room_group_id', '=', 'room_groups.id')
        ->select('rooms.*',  'room_groups.id', 'room_groups.name', 'hotels.id', 'hotels.hotel_name')->orderBy('created_at', 'desc');
        return $rooms;
    }
    public function addRoomGroup($arr)
    {
        $re = $this->model->updateOrCreate(['id' => $arr['slug']], $arr);
        // $f = $this->create($arr);
        if ($re) {
            return $this->success('created', $re);
        }
        return $this->fail('error creating hotel');
    }
}

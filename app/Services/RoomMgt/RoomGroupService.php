<?php
namespace App\Services\RoomMgt;

use App\Models\RoomGroup;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class RoomGroupService extends BaseService{

    public function __construct(RoomGroup $r)
    {
        parent::__construct($r);
    }
    public function getFieldsSearchable()
    {
        return ['name', 'price'];
    }
    public function getAllRoomGroupName()
    {
        $hotels = DB::table('room_groups')->get(['id', 'name']);
        return $this->success('hotel id and name', $hotels);
    }
    public function getAllRoomGroupByHotelId($hotel_id){
        $hotels = DB::table('room_groups')->where('hotel_id',$hotel_id)->get(['id', 'name']);
        return $this->success('hotel id and name', $hotels);
    }
    public function roomGroups($search)
    {
        $rooms = $this->allQuery($search)->join('hotels', 'room_groups.hotel_id', '=', 'hotels.id')
        ->select('room_groups.*', 'hotels.id', 'hotels.hotel_name')->orderBy('created_at', 'desc');
        return $rooms;
    }



    public function addRoomGroup($arr)
    {
        $re = $this->model->updateOrCreate(['slug'=>$arr['slug']],$arr);
        // $f = $this->create($arr);
        if ($re) {
            return $this->success('created', $re);
        }
        return $this->fail('error creating hotel');
    }
    public function updateRoomGroup($arr, $id)
    {
        $f = $this->update($arr, $id);
        if ($f['status']) {
            return $this->success('updated', $f['data']);
        }
        return $this->fail('error updating hotel');
    }
}

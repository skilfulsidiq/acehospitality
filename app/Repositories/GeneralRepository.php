<?php

namespace App\Repositories;

use App\Model\User;
use App\Models\ConferenceRoom;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\RoomGroup;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version November 11, 2019, 12:47 pm IST
 */

class GeneralRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        // return User::class;
    }

    public function getAllLocationNameAndId()
    {
        return DB::table('locations')->where('is_active',1)->get(['id', 'location_name']);
    }
    public function getHotelByLocationId($location_id){
        return DB::table('hotels')->select('id','hotel_name')->where('is_active', 1)->where('location_id',$location_id)->get();
    }
    public function getHotelsByLocation()
    {
        return Location::with('hotels')->where('is_active', 1)->get();
    }

    public function getConferenceRoomList()
    {
        return ConferenceRoom::where('status', 1)->inRandomOrder()->get();
    }
    public function getConferenceRoomDetails($slug)
    {
        return ConferenceRoom::where('slug', $slug)->first();
    }
    public function hotelDetails($slug){
        return Hotel::where('slug',$slug)->first();
    }
    public function fetchAvailableRoomGroup($data){
        $dates = $data['dates'];
        $hotel_id = $data['hotel_id'];
        // $start_date = Carbon::parse($date1)->format('Y-m-d');
        $dates = explode("/",$dates);
        $start_date = Carbon::parse($dates[0])->format('Y-m-d');
        $end_date = Carbon::parse($dates[1])->format('Y-m-d');
        $hotel = DB::table('hotels')->where('id', $hotel_id)->first();
        $rooms =[];
        if($hotel){
            $rooms = DB::table('room_groups')->where('hotel_id', $hotel->id)->get();
        }


        // dd($rooms);
        return ['dates'=>$dates,'rooms'=>$rooms,'hotel'=>$hotel];


    }
}

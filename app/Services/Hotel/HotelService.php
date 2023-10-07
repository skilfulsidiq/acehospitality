<?php

namespace App\Services\Hotel;

use App\Models\Hotel;
use App\Models\Room;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;

class HotelService extends BaseService
{

    public function __construct(Hotel $r)
    {
        parent::__construct($r);
    }
    public function getFieldsSearchable()
    {
        return ['hotel_name','hotel_email'];
    }

    public function getAllHotelName(){
        $hotels = DB::table('hotels')->get(['id','hotel_name']);
        return $this->success('hotel id and name',$hotels);
    }

    public function addNewHotel($arr){
        $f = $this->model->updateOrCreate(['id'=>$arr['slug']],$arr);
        if($f){
            return $this->success('created',$f);
        }
        return $this->fail('error creating hotel');
    }
    public function updateHotel($arr,$id)
    {
        $f = $this->update($arr,$id);
        if ($f['status']) {
            return $this->success('updated', $f['data']);
        }
        return $this->fail('error updating hotel');
    }
}

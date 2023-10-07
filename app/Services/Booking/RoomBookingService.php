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

class RoomBookingService extends BaseService
{

    use RoomAvailabilityChecking;
    public function __construct(RoomBooking $r)
    {
        parent::__construct($r);
    }
    private function calculateTotalAndVat($carts){
        $vat = session()->get('vat');
        $tax = session()->get('tax');
        $total = 0;
        $app_tax = 0;
        $app_vat = 0;
        $item_count = 0;
        foreach ($carts as $cart) {
            $sub = $cart['price'] * $cart['quantity'];
            $total += $sub;
            $app_tax += getPercentageValue($tax, $sub);
            $app_vat += getPercentageValue($vat, $sub);
            $item_count++;
        }
        return compact('app_tax','app_vat','total','item_count');
    }
    public function saveRoomBookings($arr)
    {
        $carts = $arr['carts'];
        unset($arr['carts']);
        $hotel_id = 1;
        //save user
        $user = User::updateOrCreate(['email'=>$arr['email']],$arr);
        $user_id = $user->id;
        //get vat,tax,

        if(!empty($carts)){
            $booking =Booking::create([
                'booking_ref' => generateBookingRef($user_id),
                'hotel_id' => $hotel_id,
                'user_id' => $user_id,
                'tax' => $this->calculateTotalAndVat($carts)['app_tax'],
                'vat' =>$this->calculateTotalAndVat($carts)['app_vat'],
                'item_count' => $this->calculateTotalAndVat($carts)['item_count'],
                'grand_total' => $this->calculateTotalAndVat($carts)['total'],

            ]);
            foreach($carts as $cart){

                $room_group_id = $cart['id'];
                $arrival = toCarbon($cart['attributes']['arrival']);
                $departure = toCarbon($cart['attributes']['departure']);
                $night = $departure->diffInDays($arrival);


                $r = DB::table('room_bookings')->insert([
                    'booking_id'=>$booking->id,
                    'hotel_id' => $hotel_id,
                    'user_id'=>$user_id,
                    'room_group_id'=>$room_group_id,
                    'name'=>$cart['name'],
                    'arrival_date'=>$arrival,
                    'departure_date'=>$departure,
                    'night'=>$night,
                    'quantity'=>$cart['quantity'],
                    'price'=>$cart['price'],
                ]);
            }
        }


        return $this->success("created", true);
    }
    public function getFieldsSearchable(){
        return [];
    }
    public function getAllRoomBookings($arr){
        $search = $arr['search'];
        $perPage = $arr['perPage'];
        $query = $this->allQuery($arr)->join('bookings','room_bookings.booking_id','=','bookings.id')
            ->join('users', 'room_bookings.user_id', '=', 'users.id')
        ->select('bookings.*','room_bookings.*','users.firstname','users.lastname','users.email')->orderBy('bookings.created_at','desc')
        ->paginate($perPage);
        return $this->success('all room Bookings',$query);
    }
}

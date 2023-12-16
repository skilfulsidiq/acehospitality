<?php

namespace App\Services\Booking;

use App\Mail\ReservationMail;
use App\Models\Booking;
use App\Models\ConferenceBooking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomBooking;
use App\Models\RoomGroup;
use App\Models\User;
use App\Services\BaseService;
use App\Traits\RoomAvailabilityChecking;
use App\Traits\SendMailTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ConferenceBookingService extends BaseService
{

    // use RoomAvailabilityChecking,SendMailTrait;
    public function __construct(ConferenceBooking $r)
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
            $sub = $cart['price'] * $cart['quantity']*$cart['attributes']['night'];
            $total += $sub;
            $app_tax += getPercentageValue($tax, $sub);
            $app_vat += getPercentageValue($vat, $sub);
            $item_count++;
        }
        return compact('app_tax','app_vat','total','item_count');
    }
    public function saveBookings($arr)
    {


        try {
            DB::beginTransaction();
            $usr = [
                'firstname' => $arr['fullname'],
                'email' => $arr['email'],
                'phone' => $arr['phone']
            ];
            //save user
            $user = User::updateOrCreate(['email' => $arr['email']], $usr);

            $user_id = $user->id;
            //get vat,tax,
            $data = [
                'hotel_id' => $arr['hotel_id'],
                'user_id' => $user_id,
                'conference_room_id' => $arr['confenrence_room_id'],
                'name' => $arr['name'],
                'arrival_date' => $arr['start_date'],
                'departure_date' => $arr['end_date'],
            ];
            $r =DB::table('conference_bookings')->insert($data);
                //  $r = ConferenceBooking::create($data);



                 if($r){
                    DB::commit();
                        // $this->sendReservationMail($user->email,$booking->id);

                        return $this->success("created", true);

                 }
            DB::rollBack();
            return $this->fail("failed", false);



        } catch (\Exception $th) {
            //throw $th;
            DB::rollBack();
            return $this->fail("failed", 'conference',$th);
        }



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

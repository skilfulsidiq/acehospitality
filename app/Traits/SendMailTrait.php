<?php
namespace App\Traits;

use App\Mail\ReservationMail;
use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomGroup;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

trait SendMailTrait {


    public function sendReservationMail($email,$booking_id){
        try {
            $booking = Booking::with('hotel','user','room_bookings')->where('id',$booking_id)->first();
            Mail::to($email)->send(new ReservationMail($booking));
        } catch (\Exception $th) {
            //throw $th;
            Log::debug($th->getMessage());
        }
    }
}

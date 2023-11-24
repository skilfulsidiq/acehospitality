<?php
namespace App\Traits;

use App\Mail\ContactMail;
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
            $hotel_email = $booking->hotel->hotel_email;
            
            Mail::to([$email,$hotel_email])
                ->cc('info@acehospitalityng.com')
            ->send(new ReservationMail($booking));
        } catch (\Exception $th) {
            //throw $th;
            Log::debug($th->getMessage());
        }
    }

    public function sendContactEnquiery($arr){
        $email = 'info@acehospitalityng.com';
        try {
            Mail::to($email)->send(new ContactMail($arr));
        } catch (\Exception $th) {
            //throw $th;
            Log::debug($th->getMessage());
        }
    }
}

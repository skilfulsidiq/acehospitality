<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'user_id', 'grand_total','tax','vat', 'total_payment', 'booking_status', 'payment_status', 'booking_ref', 'item_count',];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function hotel():BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
    public function room_bookings(){
        return $this->hasMany(RoomBooking::class,'booking_id');
    }
    public function payment_histories(){
        return $this->hasMany(PaymentHistory::class,'booking_id');
    }
}

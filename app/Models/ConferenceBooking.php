<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id', 'user_id', 'conference_room_id',  'name', 'arrival_date', 'departure_date', 'checked_in_at',
        'checked_out_at', 'quantity', 'price', 'night', 'has_checked_out', 'checked_out_by', 'created_by', 'document', 'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
    public function room()
    {
        return $this->belongsTo(ConferenceRoom::class, 'conference_room_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}

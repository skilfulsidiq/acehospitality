<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['location_id', 'hotel_id', 'room_number', 'room_group_id', 'status'];




    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
    public function roomGroup()
    {
        return $this->belongsTo(RoomGroup::class, 'room_group_id')->withDefault();
    }
    public function room_booking()
    {
        return $this->hasMany(RoomBooking::class, 'room_id');
    }
}

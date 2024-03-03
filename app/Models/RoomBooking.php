<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RoomBooking extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'user_id', 'room_group_id','booking_id', 'room_id', 'name', 'arrival_date', 'departure_date', 'checked_in_at',
    'checked_out_at','quantity','price','night','has_checked_out','checked_out_by','created_by','document','slug'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value) . time();
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
    public function room_group()
    {
        return $this->belongsTo(RoomGroup::class, 'room_group_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
    public function checkedOutBy()
    {
        return $this->belongsTo(Admin::class, 'checked_out_by');
    }
    public function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

}

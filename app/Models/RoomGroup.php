<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RoomGroup extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'name', 'slider_images', 'price', 'bed', 'bath', 'guest', 'status', 'no_of_rooms', 'no_of_reserved',
    'desc','amenities',
     'slug'];

     protected $casts =[
        'amenities' =>'array'
     ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value) . time();
    }
    public function setSliderImagesAttribute($value)
    {
        $this->attributes['slider_images'] = json_encode($value);
    }
    public function getSliderImagesAttribute()
    {
        return json_decode($this->attributes['slider_images']);
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id')->withDefault();
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'room_group_id');
    }
    public function room_booking()
    {
        return $this->hasMany(RoomBooking::class, 'room_group_id');
    }
}

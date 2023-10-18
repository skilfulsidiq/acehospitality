<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['location_id', 'hotel_name', 'hotel_address', 'hotel_phone', 'hotel_email', 'hotel_cover_image', 'hotel_images', 'hotel_short_desc', 'hotel_desc', 'hotel_amenities', 'hotel_map'];

    public function setHotelNameAttribute($value)
    {
        $this->attributes['hotel_name'] = $value;
        $this->attributes['slug'] = Str::slug($value) . time();
    }

    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class,'location_id');
    }

    public function roomGroup()
    {
        return $this->hasMany(RoomGroup::class, 'hotel_id')->withDefault();
    }
    public function rooms()
    {
        return $this->hasMany(Hotel::class, 'hotel_id')->withDefault();
    }
}

<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Hotel extends Model implements HasName
{
    use HasFactory;

    protected $fillable = ['location_id', 'hotel_name', 'hotel_address', 'hotel_phone', 'hotel_email', 'hotel_cover_image', 'hotel_images', 'hotel_short_desc', 'hotel_desc', 'hotel_amenities', 'hotel_map'];

    public function setHotelNameAttribute($value)
    {
        $this->attributes['hotel_name'] = $value;
        $this->attributes['slug'] = Str::slug($value) . time();
    }

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id')->withDefault();
    }

    public function roomGroups()
    {
        return $this->hasMany(RoomGroup::class, 'hotel_id');
    }
    public function conference()
    {
        return $this->hasMany(ConferenceRoom::class, 'hotel_id')->withDefault();
    }
    public function rooms()
    {
        return $this->hasMany(Hotel::class, 'hotel_id')->withDefault();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class);
    }
    // public function getTenantName():string
    // {
    //     return $this->hotel_name;
    // }

    public function getFilamentName(): string
    {
        return "{$this->hotel_name}";
    }
}

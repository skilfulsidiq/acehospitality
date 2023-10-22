<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'name',
        'images',
        'price',
        'guest',
        'status',
        'no_of_person',
        'no_of_reserved',
        'desc',
        'amenities',
        'slug'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
}

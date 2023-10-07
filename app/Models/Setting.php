<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'key', 'value'];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
}

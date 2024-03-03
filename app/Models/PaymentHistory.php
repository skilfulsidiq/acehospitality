<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PaymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [ 'hotel_id', 'user_id', 'booking_id',  'payment_method', 'payment_ref', 'payment_date', 'amount','is_confirmed','confirmed_by',];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id')->withDefault();
    }
}

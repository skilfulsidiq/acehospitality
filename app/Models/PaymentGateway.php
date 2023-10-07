<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PaymentGateway extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id', 'gateway_name', 'gateway_key', 'gateway_url', 'slug'];

    public function setGatewayNameAttribute($value)
    {
        $this->attributes['gateway_name'] = $value;
        $this->attributes['slug'] = Str::slug($value) . time();
    }
}

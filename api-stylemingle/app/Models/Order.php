<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'coupon_id',
        'shipping_address_id',
        'total_price',
        'tax',
        'price_to_pay',
        'paid_date'
    ];

    public function shippingAddress() {
        return $this->hasMany(ShippingAddress::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function coupon() {
        return $this->hasMany(Coupon::class);
    }

    
}

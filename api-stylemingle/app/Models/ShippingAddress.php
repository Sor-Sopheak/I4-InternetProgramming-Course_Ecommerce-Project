<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'city',
        'postal_code',
        'country',
        'state',
        'company',
    ];

    // public function order() {
    //     return $this->belongsTo(Order::class);
    // }
}

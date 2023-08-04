<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method_id',
        'email',
        'password',
        'card_number',
        'name_on_card',
        'expiry_month',
        'expiry_year',
        'cvc',
        'cvv',
        'cid',
        'amount'
    ];

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }
}

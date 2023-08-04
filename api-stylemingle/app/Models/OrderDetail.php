<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_detail_id',
        'order_id',
        'quantity',
        'total_price'
    ];

    public function productDetail() {
        return $this->hasOne(ProductDetail::class);
    }

    
}

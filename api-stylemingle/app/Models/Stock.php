<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'product_detail_id'
    ];

    public function productDetail() {
        return $this->hasOne(ProductDetail::class);
    }
}

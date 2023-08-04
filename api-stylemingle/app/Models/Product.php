<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_name',
        'product_type',
        'image',
        'description',
        'price'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function productDetail() {
        return $this->hasMany(ProductDetail::class);
    }

    public function product_images() {
        return $this->hasMany(ProductImage::class);
    }

}

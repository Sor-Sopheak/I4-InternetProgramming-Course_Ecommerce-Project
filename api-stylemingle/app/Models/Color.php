<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['color', 'color_code'];

    public function productDetail() {
        return $this->hasMany(ProductDetail::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'product_category',
        'product_size',
        'product_price',
        'product_img'
    ];

    
    public function cart(){
        $this->belongsTo(Cart::class);
    }
}

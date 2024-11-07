<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];


    protected static function booted()
    {
        static::created(function ($product) {
            $product->product_id = 'PROD-' . str_pad($product->id, 6, '0', STR_PAD_LEFT);
            $product->save();
        });
    }
}

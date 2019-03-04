<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'product_name', 'price', 'image', 'quantity', 'avg_rating'
    ];

    public function orders() {
    	
        return $this->belongsToMany('App\Order');
    }
}

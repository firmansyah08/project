<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function order_product()
    {
        return $this->belongsToMany('App\Order', 'order_products', 'order_id', 'product_id');
    }
}

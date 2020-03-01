<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'status', 'transaction_date',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function order_product()
    {
        return $this->belongsToMany('App\Product', 'order_products', 'order_id', 'product_id');
    }
}

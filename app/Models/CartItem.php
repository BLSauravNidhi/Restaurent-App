<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function CartInfo(){
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}

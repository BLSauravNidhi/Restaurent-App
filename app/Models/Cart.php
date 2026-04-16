<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;

    public function GetItems(){
        return $this->hasMany(CartItem::class);
    }
}

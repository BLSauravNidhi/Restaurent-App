<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableSession extends Model
{
    public $timestamps = false;

    public function GetTable(){
        return $this->belongsTo(Table::class);
    }
    public function GetCart(){
        return $this->hasOne(Cart::class, 'session_id');
    }
}

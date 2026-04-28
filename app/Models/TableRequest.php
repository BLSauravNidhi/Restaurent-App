<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableRequest extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function table(){
        return $this->belongsTo(Table::class);
    }
}

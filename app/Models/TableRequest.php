<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableRequest extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function tableinfo(){
        return $this->belongsTo(Table::class, 'table_id');
    }
}

<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class RestaurentAdmin extends Authenticatable
{
    public $timestamps = false;

    protected $guarded = [];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    
    protected $casts = [
        'password' => 'hashed',
    ];

    public function tblrequests(){
        return $this->hasMany(TableSession::class);
    }
}

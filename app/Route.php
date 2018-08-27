<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id', 'share',
    ];

    public function userRoute(){
        return $this->belongsTo('App\User');
    }

    public function routePlaces(){
        return $this->hasMany('App\RoutePlace');
    }
}

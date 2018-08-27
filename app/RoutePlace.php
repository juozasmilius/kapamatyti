<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoutePlace extends Model
{
    protected $fillable = [
        'route_id', 'place_id', 'user_id',
    ];

    public function route(){
        return $this->belongsTo('App\Route');
    }
}

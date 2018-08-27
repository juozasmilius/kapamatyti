<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceType extends Model
{
    protected $fillable = [
        'name',
    ];

    public function placeT(){
        return $this->belongsTo('App\Place');
    }
}

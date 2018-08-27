<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'municipality_id',
    ];

    public function placeCity(){
        return $this->belongsTo('App\Place');
    }

    public function municipality(){
        return $this->hasOne('App\Municipality');
    }


}

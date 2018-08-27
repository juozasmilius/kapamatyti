<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = [
        'name', 'country_id',
    ];

    public function Municipalities(){
        return $this->belongsTo('App\Municipality');
    }

    public function country(){
        return $this->hasOne('App\Country');
    }
}

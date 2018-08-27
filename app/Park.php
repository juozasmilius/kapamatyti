<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $fillable = [
        'name', 'park_regione_id',
    ];

    public function placePark(){
        return $this->belongsTo('App\Place');
    }

    public function regione(){
        return $this->hasOne('App\ParkRegione');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = [
        'name', 'county_id',
    ];

    public function cityM(){
        return $this->belongsTo('App\City');
    }

    public function county(){
        return $this->hasOne('App\County');
    }
}

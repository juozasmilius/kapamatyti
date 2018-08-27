<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name', 'iso2', 'iso3', 'phoneCode', 'flag',
    ];

    public function CountyC(){
        return $this->belongsTo('App\County');
    }
}

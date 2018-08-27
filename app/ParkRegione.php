<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkRegione extends Model
{
    protected $fillable = [
        'name',
    ];

    public function parkR(){
        return $this->belongsTo('App\Park');
    }
}

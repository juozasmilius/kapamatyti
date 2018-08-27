<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceImage extends Model
{
    protected $fillable = [
        'place_id', 'user_id', 'photo', 'title', 'size', 'description',
    ];

    public function userImages(){
        return $this->belongsTo('App\User');
    }

    public function placeI(){
        return $this->belongsTo('App\Place');
    }
}

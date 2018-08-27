<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = array('user_id', 'name', 'litleDescription', 'description', 'address', 'city_id', 'placeType_id', 'park_id', 'url', 'coordinates', 'cover_image', 'votes', 'likes', 'dislikes');

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function city(){
        return $this->hasMany('App\City');
    }

    public function placeType(){
        return $this->hasMany('App\PlaceType');
    }

    public function park(){
        return $this->hasMany('App\Park');
    }

    public function placeImage(){
        return $this->hasMany('App\PlaceImage');
    }
}

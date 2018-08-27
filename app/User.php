<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Add One to many relationship

    //Places
    public function places(){
        return $this->hasMany('App\Place');
    }

    //Places Pictures
    public function placesImages(){
        return $this->hasMany('App\PlaceImage');
    }

    //Routes
    public function routes(){
        return $this->hasMany('App\Route');
    }

    //Routes
    public function routePlaces(){
        return $this->hasMany('App\RoutePlace');
    }
    

}

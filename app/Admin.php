<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function locations(){
        return $this->hasMany('App\Location');
    }

    public function tags(){
        return $this->hasMany('App\Tag');
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function location(){
        return $this->belongsTo('App\Location');
    }
}

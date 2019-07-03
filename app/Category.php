<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function admin(){
        return $this->belongsToMany('App\Admin');
    }

    public function posts(){
        return $this->hasMany('posts');
    }

    public function subCategories(){
        return $this->belongsToMany('App\SubCategory');
    }
}

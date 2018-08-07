<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}

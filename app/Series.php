<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $with = ['lesson'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function lesson(){
        return $this->hasMany('App\Lesson');
    }
}

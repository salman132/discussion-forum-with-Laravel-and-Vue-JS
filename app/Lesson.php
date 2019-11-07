<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title','description','series_id','episode_number','video_id'];


    public function series(){
        return $this->belongsTo('App\Series');
    }

}

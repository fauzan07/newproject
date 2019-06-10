<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    public $timestamps=false;


     public function projects(){
    	return $this->hasMany('App\Project','catagory_id','id');
    }


    public function users(){
    	return $this->belongsToMany('App\User','catagoryassigns','catagory_id','user_id');
}
}

 

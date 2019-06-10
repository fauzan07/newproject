<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
     protected $guarded=[];
    public $timestamps=false;


     public function category(){
    	return $this->belongsTo('App\Category','catagory_id','id');
    }

 public function related_project(){
    	return $this->belongsToMany('App\Project','related_projects','project_id','relatedproject_id');

}

 public function users(){
    	return $this->belongsToMany('App\User','projectassigns','project_id','user_id');
}

}

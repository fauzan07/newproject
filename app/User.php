<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','admin','approved_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 
    protected $dates = [
     'current_sign_in_at', 'last_sign_in_at'
    ];
   // protected $guarded=['user_type'];

    public function getAdminAttribute()
    {
        if($this->user_type == 'admin')
        {
            return true;
        }
        return false;
    }


 public function category(){
    return $this->belongsToMany('App\Category','catagoryassigns','user_id','catagory_id');
}

public function project(){
    return $this->belongsToMany('App\Project','projectassigns','user_id','project_id');
}


 public function trackinguser(){
        return $this->hasMany('App\TrackingUser','user_id','id');
    }

}

<?php

namespace App;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'role', 'cellphone',
    'package_id', 'city_id', 'gender', 'birthday',
    'status', 'package_valid_until'
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

  // public function package()
  // {
  //   return $this->belongsTo(Packages::class);
  // }

  public function city()
  {
    return $this->belongsTo(City::class);
  }

  public function package()
  {
    return $this->belongsTo(Package::class);
  }

}

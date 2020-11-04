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
    'name', 'email', 'password', 'role', 'cellphone', 'package_id',
    'package_valid_until', 'created_by'
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

  public function package()
  {
    return $this->belongsTo(Packages::class);
  }


  public function update_validity($timestamp){
    $username = explode('@', $this->email);
    $content = http_build_query(array(
      'key' => 'F8EBD133C14FE318BE82F421B99A6',
      'action' => 'update_validity',
      'iptv_user' =>  $username[0],
      'timestamp' => $timestamp,
    ));

    $context_options = array (
      'http' => array (
        'method' => 'POST',
        'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
        . "Content-Length: " . strlen($content) . "\r\n",
        'content' => $content
      )
    );

    $context = stream_context_create($context_options);
    $result = json_decode(file_get_contents('http://main.queroassistir.tv:25500/qatv.php', null, $context));
    if($result->status == 200){
      return true;
    }else {
      return false;
    }
  }

}

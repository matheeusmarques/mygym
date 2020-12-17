<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $fillable = [
      'user_id', 'ref', 'price', 'method', 'status', 'package_id', 'quantity', 'is_cronjob',
      'type', 'external_reference', 'created_by'
  ];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function package()
  {
      return $this->belongsTo(Packages::class);
  }

}

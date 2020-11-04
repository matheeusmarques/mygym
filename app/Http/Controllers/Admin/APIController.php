<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class APIController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }


  public function get_bouquets(){
    $str = file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php?key=F8EBD133C14FE318BE82F421B99A6&action=list_bouquets');
    echo $str;
  }

  public function get_servers(){
    $str = file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php?key=F8EBD133C14FE318BE82F421B99A6&action=list_servers');
    echo $str;
  }
}

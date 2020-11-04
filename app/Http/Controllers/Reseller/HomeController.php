<?php

namespace App\Http\Controllers\Reseller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Invoices;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index()
  {
    $tvshows =  json_decode(file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php?key=F8EBD133C14FE318BE82F421B99A6&action=last_tvshows'));
    $movies =  json_decode(file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php?key=F8EBD133C14FE318BE82F421B99A6&action=last_movies'));

    $data = [
      'category_name' => 'dashboard',
      'page_name' => 'dashboard',
      'username' => Auth::user()->name,
      'role' => Auth::user()->role,
      'has_scrollspy' => 0,
      'scrollspy_offset' => '',
      'alt_menu' => 0,
      'last_invoices' => Invoices::where('created_by', Auth::user()->id)->latest()->take(5)->get(),
      'last_customers' => User::where('created_by', Auth::user()->id)->latest()->take(5)->get(),
      'total_customers' => User::where('created_by', Auth::user()->id)->count(),
      'last_tvshows' => $tvshows->tvshows,
      'last_movies' => $movies[0],
      'total_trial' => User::where('is_trial', '1')->where('created_by', Auth::user()->id)->count(),
      'active_customers' => User::where('created_by', Auth::user()->id)->where('package_valid_until', '>', Carbon::today()->toDateString())->count(),
    ];
    // echo '<pre>';
    // print_r($movies);
    // echo '</pre>';

    // foreach ($movies as $key => $movie) {
    //   echo (string) $movie[0];
    // }

    // echo $

    // $m = $movies->tvshows;
    // dd($m);
    // $n = json_decode()
    $movies = $movies[0];
    foreach ($movies as $m) {
      // $n = json_decode($m->movie_propeties);s
      echo json_decode($m->movie_propeties)->kinopoisk_url;
    }
    // foreach ($movies as $movie) {
    //   foreach ($movie as $key => $m) {
    //     $n = json_decode($m->movie_propeties);
    //     echo '<pre>';
    //     echo $n->kinopoisk_url;
    //     // print_r($n);
    //     echo '</pre>';
    //     // echo $m->movie_propeties;
    //     // echo $m->kinopoisk_url[0];
    //   }
    // }


    // $toJson = json_encode($movies->tvshows);

    // echo json_decode($toJson);
    // echo $movies->tvshows[0]['kinopoisk_url'];

    // $arr['total_customers'] = User::count();


    // $arr['last_users'] = Invoice::latest()->take(5)->get();




    return view('reseller.dashboard')->with($data);
  }
}

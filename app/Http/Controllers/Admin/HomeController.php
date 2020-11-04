<?php

namespace App\Http\Controllers\Admin;

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


    $data = [
      'category_name' => 'dashboard',
      'page_name' => 'dashboard',
      'username' => Auth::user()->name,
      'role' => Auth::user()->role,
      'has_scrollspy' => 0,
      'scrollspy_offset' => '',
      'alt_menu' => 0,
      'last_invoices' => Invoices::latest()->take(5)->get(),
      'last_customers' => User::latest()->take(5)->get(),
      'total_customers' => User::count(),
      'total_trial' => User::where('is_trial', '1')->count(),
      'active_customers' => User::all()->where('package_valid_until', '>', Carbon::today()->toDateString())->count(),
    ];

    // $arr['total_customers'] = User::count();


    // $arr['last_users'] = Invoice::latest()->take(5)->get();




    return view('admin/dashboard')->with($data);
  }
}

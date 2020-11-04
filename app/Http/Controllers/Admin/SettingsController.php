<?php

namespace App\Http\Controllers\Admin;

use App\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use Validator;
Use Exception;


class SettingsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $settings = Settings::orderBy('created_at', 'desc')->first();
    $data = [
      'category_name' => 'geral-settings',
      'page_name' => 'geral-settings',
      'settings' => $settings,
      'role' => Auth::user()->role,
      'username' => Auth::user()->name,
      'has_scrollspy' => 0,
      'scrollspy_offset' => '',
      'alt_menu' => 0,
    ];
    return view('admin/settings/index')->with($data);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'server_name' => 'required',
      'server_dns'  => 'required',
      'alternative_dns' => 'required',
      'server_cdn' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Erro! Preencha todos os campos.',
      ]);
    }

    try {
      $settings = new Settings();
      $settings->alternative_dns = $request->input('alternative_dns');
      $settings->server_name = $request->input('server_name');
      $settings->server_dns = $request->input('server_dns');
      $settings->server_cdn = $request->input('server_cdn');
      $settings->save();
      return response()->json([
        'status' => 200,
        'message' => 'Criado com sucesso!',
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => $e->getMessage(),
      ]);
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Settings  $settings
  * @return \Illuminate\Http\Response
  */
  public function show(Settings $settings)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Settings  $settings
  * @return \Illuminate\Http\Response
  */
  public function edit(Settings $settings)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Settings  $settings
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Settings $settings)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Settings  $settings
  * @return \Illuminate\Http\Response
  */
  public function destroy(Settings $settings)
  {
    //
  }
}

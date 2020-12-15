<?php

namespace App\Http\Controllers\Admin;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use Validator;
Use Exception;

class CityController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
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

  public function get_data(){
    $city = City::all();
    return datatables()->of($city)
    ->addColumn('action', function($city){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-city"
      data-id="'.$city->id.'"
      data-name="'.$city->name.'"
      data-state_id="'.$city->state_id.'"
      name="edit" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-city"
      data-id="'.$city->id.'"
      data-name="'.$city->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      // $button .= '&nbsp;&nbsp;';
      // $button .= '<button class="btn btn-success nimmu-invoice-viwe-btn"><i class="fa fa-eye"></i></button>';
      $button .= '&nbsp;&nbsp;';

      return $button;
    })
    ->editColumn('state_id', function (City $city) {
      // $city = City::where('id', $city->package_id)->firstOrFail();
      return $city->state->name;
    })
    ->rawColumns(['action'])
    ->make(true);
  }

  public function get_data_json(){
    $cities = City::all();
    $cities_array = array(
      'status' => '200',
      'cities' => $cities,
    );
    return response()->json($cities_array);
  }


  public function get_states_and_cities(){
    $data = DB::table('cities')
    ->join('states', 'cities.state_id', '=', 'states.id')
    ->select( DB::raw('states.name AS state'), 'cities.name')
    ->get();
    $cities_array = array(
      'status' => '200',
      'cities' => $data,
    );
    return response()->json($cities_array);
  }

  public function delete(Request $request){
    $validation = Validator::make($request->all(), [
      'id' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Erro',
      ]);
    }

    $city = City::findOrFail($request->input('id'))->delete();

    return response()->json([
      'status' => 200,
      'message' => 'Deletado com sucesso.',
    ]);
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
      'name' => 'required',
      'states_id'  => 'required|integer',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Erro! Preencha todos os campos.',
      ]);
    }

    try {
      $city = new City();
      $city->name = $request->input('name');
      $city->state_id = $request->input('states_id');
      $city->save();
      return response()->json([
        'status' => 200,
        'message' => 'Criado com sucesso!',
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 400,
        'message' => $e->getMessage(),
      ]);
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\City  $city
  * @return \Illuminate\Http\Response
  */
  public function show(City $city)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\City  $city
  * @return \Illuminate\Http\Response
  */
  public function edit(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'id' => 'required|integer',
      'name' => 'required',
      'state_id' => 'required|integer',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Erro! Preencha todos os campos.',
      ]);
    }
    try {
      $city = City::findOrFail($request->input('id'));
      $city->name = $request->input('name');
      $city->state_id = $request->input('state_id');
      $city->save();
      return response()->json([
        'status' => 200,
        'message' => 'Salvo com sucesso!',
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 400,
        'message' => $e->getMessage(),
      ]);
    }
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\City  $city
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, City $city)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\City  $city
  * @return \Illuminate\Http\Response
  */
  public function destroy(City $city)
  {
    //
  }
}

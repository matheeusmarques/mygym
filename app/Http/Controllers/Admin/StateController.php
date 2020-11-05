<?php

namespace App\Http\Controllers\Admin;

use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Validator;
Use Exception;

class StateController extends Controller
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
    $states = State::all();
    return datatables()->of($states)
    ->addColumn('action', function($states){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-state"
      data-id="'.$states->id.'"
      data-name="'.$states->name.'"
      data-acronym="'.$states->acronym.'"
      name="edit" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-state"
      data-id="'.$states->id.'"
      data-name="'.$states->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      // $button .= '&nbsp;&nbsp;';
      // $button .= '<button class="btn btn-success nimmu-invoice-viwe-btn"><i class="fa fa-eye"></i></button>';
      $button .= '&nbsp;&nbsp;';

      return $button;
    })
    ->rawColumns(['action'])
    ->make(true);
  }

  public function get_data_json(){
    $states = State::all()->get();
    $states_array = array(
      'status' => '200',
      'packages' => $states,
    );
    return response()->json($states_array);
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

    $state = State::findOrFail($request->input('id'))->delete();

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
      'acronym'  => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Erro! Preencha todos os campos.',
      ]);
    }

    try {
      $state = new State();
      $state->name = $request->input('name');
      $state->acronym = $request->input('acronym');
      $state->save();
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
  * @param  \App\State  $state
  * @return \Illuminate\Http\Response
  */
  public function show(State $state)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\State  $state
  * @return \Illuminate\Http\Response
  */
  public function edit(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'id' => 'required',
      'name' => 'required',
      'acronym' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Error! Preencha todos os campos.',
      ]);
    }
    try {
      $state = State::findOrFail($request->input('id'));
      $state->name = $request->input('name');
      $state->acronym = $request->input('acronym');
      $state->save();
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
  * @param  \App\State  $state
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, State $state)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\State  $state
  * @return \Illuminate\Http\Response
  */
  public function destroy(State $state)
  {
    //
  }
}

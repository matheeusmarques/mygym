<?php

namespace App\Http\Controllers\Admin;

use App\Packages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;


use Validator;
Use Exception;


class PackagesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.packages.index');
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
  public function get_data_json(){
    $packages = Packages::where('status', 1)->where('type', 0)->get();
    $packages_array = array(
      'status' => '200',
      'packages' => $packages,
    );
    return response()->json($packages_array);
  }

  public function get_data_json_resellers(){
    $packages = Packages::where('status', 1)->where('type', 1)->get();
    $packages_array = array(
      'status' => '200',
      'packages' => $packages,
    );
    return response()->json($packages_array);
  }

  public function store(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'name' => 'required',
      'description'  => 'required',
      'quantity' => 'required',
      'price' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Erro! Preencha todos os campos.',
      ]);
    }

    try {
      $package = new Packages();
      $package->name = $request->input('name');
      $package->description = $request->input('description');
      $package->price = $request->input('price');
      $package->status = '1';
      $package->type = '0';
      $package->bouquets = implode(',', $request->input('bouquets_id'));
      $package->quantity = $request->input('quantity');
      $package->save();
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

  public function store_reseller(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'name' => 'required',
      'description'  => 'required',
      'quantity' => 'required',
      'price' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Erro! Preencha todos os campos.',
      ]);
    }

    try {
      $package = new Packages();
      $package->name = $request->input('name');
      $package->description = $request->input('description');
      $package->price = $request->input('price');
      $package->status = '1';
      $package->type = '1';
      $package->quantity = $request->input('quantity');
      $package->save();
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

  public function get_data(){
    $packages = Packages::where('type', 0);
    return datatables()->of($packages)
    ->addColumn('action', function($packages){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-package"
      data-id="'.$packages->id.'"
      data-name="'.$packages->name.'"
      data-price="'.$packages->price.'"
      data-quantity="'.$packages->quantity.'"
      data-status="'.$packages->status.'"
      data-bouquets="'.$packages->bouquets.'"
      data-description="'.$packages->description.'"
      name="edit" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-package"
      data-id="'.$packages->id.'"
      data-name="'.$packages->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      // $button .= '&nbsp;&nbsp;';
      // $button .= '<button class="btn btn-success nimmu-invoice-viwe-btn"><i class="fa fa-eye"></i></button>';
      $button .= '&nbsp;&nbsp;';

      return $button;
    })->editColumn('status', function(Packages $packages){
      if ($packages->status == 1){
        return '<span class="paid">Ativado</span>';
      }else{
        return '<span class="overdue">Desativado</span>';
      }
    })
    ->editColumn('price', function (Packages $packages) {

      return 'R$'.$packages->price;
    })
    ->rawColumns(['action', 'status'])
    ->make(true);
  }

  public function get_data_reseller(){
    $packages = Packages::where('type', 1);
    return datatables()->of($packages)
    ->addColumn('action', function($packages){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-package"
      data-id="'.$packages->id.'"
      data-name="'.$packages->name.'"
      data-price="'.$packages->price.'"
      data-quantity="'.$packages->quantity.'"
      data-status="'.$packages->status.'"
      data-description="'.$packages->description.'"
      name="edit" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-package"
      data-id="'.$packages->id.'"
      data-name="'.$packages->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      // $button .= '&nbsp;&nbsp;';
      // $button .= '<button class="btn btn-success nimmu-invoice-viwe-btn"><i class="fa fa-eye"></i></button>';
      $button .= '&nbsp;&nbsp;';

      return $button;
    })->editColumn('status', function(Packages $packages){
      if ($packages->status == 1){
        return '<span class="paid">Ativado</span>';
      }else{
        return '<span class="overdue">Desativado</span>';
      }
    })
    ->editColumn('price', function (Packages $packages) {

      return 'R$'.$packages->price;
    })
    ->rawColumns(['action', 'status'])
    ->make(true);
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Packages  $packages
  * @return \Illuminate\Http\Response
  */
  public function show(Packages $packages)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Packages  $packages
  * @return \Illuminate\Http\Response
  */
  public function edit(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'name' => 'required',
      'id' => 'required',
      'description'  => 'required',
      'status'  => 'required',
      'quantity' => 'required',
      'price' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Preencha todos os campos.',
      ]);
    }

    try {
      $package = Packages::findOrFail($request->input('id'));
      $package->name = $request->input('name');
      $package->status = $request->input('status');
      $package->description = $request->input('description');
      $package->quantity = $request->input('quantity');
      $package->price = $request->input('price');
      $package->save();
      return response()->json([
        'status' => 200,
        'message' => 'Salvo com sucesso!',
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => $e->getMessage(),
      ]);
    }
  }

  public function edit_reseller(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'name' => 'required',
      'id' => 'required',
      'description'  => 'required',
      'status'  => 'required',
      'quantity' => 'required',
      'price' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Preencha todos os campos.',
      ]);
    }

    try {
      $package = Packages::findOrFail($request->input('id'));
      $package->name = $request->input('name');
      $package->status = $request->input('status');
      $package->description = $request->input('description');
      $package->quantity = $request->input('quantity');
      $package->price = $request->input('price');
      $package->save();
      return response()->json([
        'status' => 200,
        'message' => 'Salvo com sucesso!',
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => $e->getMessage(),
      ]);
    }
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Packages  $packages
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Packages $packages)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Packages  $packages
  * @return \Illuminate\Http\Response
  */
  public function destroy(Packages $packages)
  {
    //
  }

  public function delete(Request $request){
    $validation = Validator::make($request->all(), [
      'id' => 'required',
    ]);

    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Erro! Argumentos em falta.',
      ]);
    }

    $package = Packages::findOrFail($request->input('id'))->delete();

    return response()->json([
      'status' => 200,
      'message' => 'Deletado com sucesso.',
    ]);

  }
}

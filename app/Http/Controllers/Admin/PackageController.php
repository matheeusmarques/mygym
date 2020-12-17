<?php

namespace App\Http\Controllers\Admin;

use App\Package;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Validator;
Use Exception;

class PackageController extends Controller
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

    public function get_data_json(){
      $packages = Package::where('status', 1)->get();
      $packages_array = array(
        'status' => '200',
        'packages' => $packages,
      );
      return response()->json($packages_array);
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
        'description'  => 'required',
        'duration' => 'required|integer',
        'price' => 'required',
      ]);

      if ($validation->fails())
      {
        return response()->json([
          'status' => 400,
          'message' => 'Erro! Preencha todos os campos.',
        ]);
      }

      try {
        $package = new Package();
        $package->name = $request->input('name');
        $package->description = $request->input('description');
        $package->price = $request->input('price');
        $package->status = '1';
        $package->duration = $request->input('duration');
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
      $packages = Package::where('status', 1);
      return datatables()->of($packages)
      ->addColumn('action', function($packages){
        $button = '<button type="button"
        data-toggle="modal"
        data-target="#modal-edit-package"
        data-id="'.$packages->id.'"
        data-name="'.$packages->name.'"
        data-price="'.$packages->price.'"
        data-duration="'.$packages->duration.'"
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
      })->editColumn('status', function(Package $packages){
        if ($packages->status == 1){
          return '<span class="badge badge-success">Ativado</span>';
        }else{
          return '<span class="badge badge-danger">Desativado</span>';
        }
      })
      ->editColumn('price', function (Package $packages) {

        return 'R$'.$packages->price;
      })
      ->rawColumns(['action', 'status'])
      ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $validation = Validator::make($request->all(), [
        'name' => 'required',
        'id' => 'required',
        'description'  => 'required',
        'status'  => 'required',
        'duration' => 'required',
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
        $package = Package::findOrFail($request->input('id'));
        $package->name = $request->input('name');
        $package->status = $request->input('status');
        $package->description = $request->input('description');
        $package->duration = $request->input('duration');
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
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
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
          'status' => 400,
          'message' => 'Erro! Preencha todos os campos.',
        ]);
      }

      $package = Package::findOrFail($request->input('id'))->delete();

      return response()->json([
        'status' => 200,
        'message' => 'Deletado com sucesso.',
      ]);

    }
}

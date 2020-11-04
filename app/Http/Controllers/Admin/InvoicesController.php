<?php

namespace App\Http\Controllers\Admin;

use App\Invoices;
use App\Packages;
use App\User;
use MercadoPago;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use Validator;
Use Exception;

class InvoicesController extends Controller
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

  public function generate_invoice(Request $request){

    $this->validate($request, [
      'package_id' => 'required|integer',
      'id' => 'required|integer',
      'payment_method' => 'required'
    ]);

    $package = Packages::findOrFail($request->input('package_id'));
    $u = User::findOrFail($request->input('id'));

    if($request->input('payment_method') == 'MercadoPago'){
      try {

        MercadoPago\SDK::setClientId(env("MP_CLIENT_KEY"));
        MercadoPago\SDK::setClientSecret(env('MP_SECRET_KEY'));
        // MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));


        $preference = new MercadoPago\Preference();
        $item = new MercadoPago\Item();

        $item->id = $package->id;
        $item->title = $package->name;
        $item->quantity = 1;
        $item->currency_id = "BRL";
        $item->unit_price = $package->price;

        $preference->items = array($item);

        $preference->notification_url = env('MP_NOTIFICATION_URL');


        $preference->external_reference = time().'_'.$u->email;

        $preference->save();

        $invoice = new Invoices([
          'user_id' => $request->input('id'),
          'created_by' => Auth::user()->id,
          'package_id' => $request->input('package_id'),
          'quantity' => ($package->quantity / 30),
          'ref' => $preference->id,
          'price' => $package->price,
          'method' => 'MercadoPago',
          'external_reference' => $preference->external_reference,
          'type' => 0,
          'status' => 'Pendente'
        ]);

        $invoice->save();

        return response()->json([
          'status' => 200,
          'message' => 'Invoice generated with success!',
        ]);
      }catch (Exception $e) {
        return response()->json([
          'status' => 500,
          'message' => 'Error!',
        ]);
      }
    }else {
      $invoice = new Invoices([
        'user_id' => $request->input('id'),
        'package_id' => $request->input('package_id'),
        'created_by' => Auth::user()->id,

        'quantity' => ($package->quantity / 30),
        'ref' => time().$u->email,
        'price' => $package->price,
        'method' => 'Externo',
        'external_reference' => time().$u->email,
        'type' => 0,
        'status' => 'Pendente'
      ]);
      $invoice->save();

      return response()->json([
        'status' => 200,
        'message' => 'Invoice generated with success!',
      ]);
    }

    return response()->json([
      'status' => 500,
      'message' => 'Error!',
    ]);

  }

  public function generate_invoice_reseller(Request $request){

    $this->validate($request, [
      'package_id' => 'required|integer',
      'id' => 'required|integer',
      'payment_method' => 'required'
    ]);

    $package = Packages::findOrFail($request->input('package_id'));
    $u = User::findOrFail($request->input('id'));

    if($request->input('payment_method') == 'MercadoPago'){
      try {

        MercadoPago\SDK::setClientId(env("MP_CLIENT_KEY"));
        MercadoPago\SDK::setClientSecret(env('MP_SECRET_KEY'));
        // MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));


        $preference = new MercadoPago\Preference();
        $item = new MercadoPago\Item();

        $item->id = $package->id;
        $item->title = $package->name;
        $item->quantity = 1;
        $item->currency_id = "BRL";
        $item->unit_price = $package->price;

        $preference->items = array($item);

        $preference->notification_url = env('MP_NOTIFICATION_URL');


        $preference->external_reference = time().'_'.$u->email;

        $preference->save();

        $invoice = new Invoices([
          'user_id' => $request->input('id'),
          'created_by' => Auth::user()->id,
          'package_id' => $request->input('package_id'),
          'quantity' => $package->quantity,
          'ref' => $preference->id,
          'price' => $package->price,
          'method' => 'MercadoPago',
          'external_reference' => $preference->external_reference,
          'type' => 1,
          'status' => 'Pendente'
        ]);

        $invoice->save();

        return response()->json([
          'status' => 200,
          'message' => 'Invoice generated with success!',
        ]);
      }catch (Exception $e) {
        return response()->json([
          'status' => 500,
          'message' => 'Error!',
        ]);
      }
    }else {
      $invoice = new Invoices([
        'user_id' => $request->input('id'),
        'package_id' => $request->input('package_id'),
        'created_by' => Auth::user()->id,

        'quantity' => $package->quantity,
        'ref' => time().$u->email,
        'price' => $package->price,
        'method' => 'Externo',
        'external_reference' => time().'_'.$u->email,
        'type' => 1,
        'status' => 'Pendente'
      ]);
      $invoice->save();

      return response()->json([
        'status' => 200,
        'message' => 'Invoice generated with success!',
      ]);
    }

    return response()->json([
      'status' => 500,
      'message' => 'Error!',
    ]);

  }

  public function get_data_clients(){
    $invoices = Invoices::where('type', 0);
    return datatables()->of($invoices)
    ->addColumn('action', function($invoices){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-package"
      data-id="'.$invoices->id.'"
      name="edit" class="edit btn btn-primary mb-2">Visualizar</button>';
      $button .= '&nbsp;&nbsp;';
      if($invoices->status !== 'Aprovado' && $invoices->status !== 'Cancelado'){
        $button .= '<button data-toggle="modal"
        data-id="'.$invoices->id.'"
        data-target="#modal-approve-invoice"
        type="button" name="delete" class="delete btn btn-success mb-2">Aprovar</button>';
        // $button .= '&nbsp;&nbsp;';
        // $button .= '<button class="btn btn-success nimmu-invoice-viwe-btn"><i class="fa fa-eye"></i></button>';
        $button .= '&nbsp;&nbsp;';
      }

      return $button;
    })->editColumn('status', function(Invoices $invoices){
      if ($invoices->status == 'Pendente'){
        return '<span class="badge badge-info">Pendente</span>';
      }elseif($invoices->status == 'Aprovado'){
        return '<span class="badge badge-success">Aprovado</span>';
      }elseif ($invoice->status == 'Cancelado') {
        return '<span class="badge badge-danger">Cancelado</span>';
      }
    })
    ->editColumn('price', function (Invoices $invoices) {

      return 'R$'.$invoices->price;
    })
    ->editColumn('created_at', function (Invoices $invoices) {
      return Carbon::parse($invoices->created_at)->format('d/m/Y h:m');
    })
    ->editColumn('user_id', function (Invoices $invoices) {
      return $invoices->user->email;
    })
    ->editColumn('package_id', function (Invoices $invoices) {
      return $invoices->package->name;
    })
    ->rawColumns(['action', 'status', 'created_at'])
    ->make(true);
  }

  public function get_data_resellers(){
    $invoices = Invoices::where('type', 1);
    return datatables()->of($invoices)
    ->addColumn('action', function($invoices){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-package"
      data-id="'.$invoices->id.'"
      name="edit" class="edit btn btn-primary mb-2">Visualizar</button>';
      $button .= '&nbsp;&nbsp;';
      if($invoices->status !== 'Aprovado' && $invoices->status !== 'Cancelado'){
        $button .= '<button data-toggle="modal"
        data-target="#modal-approve-invoice"
        data-id="'.$invoices->id.'"
        type="button" name="delete" class="delete btn btn-success mb-2">Aprovar</button>';
        // $button .= '&nbsp;&nbsp;';
        // $button .= '<button class="btn btn-success nimmu-invoice-viwe-btn"><i class="fa fa-eye"></i></button>';
        $button .= '&nbsp;&nbsp;';
      }

      return $button;
    })->editColumn('status', function(Invoices $invoices){
      if ($invoices->status == 'Pendente'){
        return '<span class="badge badge-info">Pendente</span>';
      }elseif($invoices->status == 'Aprovado'){
        return '<span class="badge badge-success">Aprovado</span>';
      }elseif ($invoice->status == 'Cancelado') {
        return '<span class="badge badge-danger">Cancelado</span>';
      }
    })
    ->editColumn('price', function (Invoices $invoices) {

      return 'R$'.$invoices->price;
    })
    ->editColumn('created_at', function (Invoices $invoices) {
      return Carbon::parse($invoices->created_at)->format('d/m/Y h:m');
    })
    ->editColumn('user_id', function (Invoices $invoices) {
      return $invoices->user->email;
    })
    ->editColumn('package_id', function (Invoices $invoices) {
      return $invoices->package->name;
    })
    ->rawColumns(['action', 'status', 'created_at'])
    ->make(true);
  }

  public function approve_invoice_reseller(Request $request){
    $this->validate($request, [
      'invoice_id' => 'required|integer',
    ]);

    $invoice = Invoices::findOrFail($request->input('invoice_id'));

    $invoice->status = 'Aprovado';
    $invoice->save();

    $user = User::findOrFail($invoice->user_id);

    $user->credits += $invoice->quantity;

    $user->save();

    return response()->json([
      'status' => 200,
      'message' => 'Invoice approved with success!',
    ]);
  }

  public function approve_invoice(Request $request){ 
    $this->validate($request, [
      'invoice_id' => 'required|integer',
    ]);

    $invoice = Invoices::findOrFail($request->input('invoice_id'));
    $user = User::findOrFail($invoice->user_id);


    $time = Carbon::now('America/Sao_Paulo');
    $timeToAdd = ($invoice->package->quantity * $invoice->quantity) * 86400;

    if($time->greaterThan($user->package_valid_until)){
      $user->package_valid_until = $time->addSeconds($timeToAdd);
    }else {
      $time = new Carbon($user->package_valid_until);
      $user->package_valid_until = $time->addSeconds($timeToAdd);
    }

    $username = explode('@', $user->email);
    $content = http_build_query(array(
      'key' => 'F8EBD133C14FE318BE82F421B99A6',
      'action' => 'set_expire_and_bouquets',
      'iptv_user' =>  $username[0],
      'bouquets' => '['.$invoice->package->bouquets.']',
      'timestamp' => $time->timestamp,
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

    $result = json_decode(file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php', null, $context));

    $invoice->status = 'Aprovado';

    $invoice->save();
    $user->save();

    return response()->json([
      'status' => 200,
      'message' => 'Invoice approved with success!',
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
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Invoices  $invoices
  * @return \Illuminate\Http\Response
  */
  public function show(Invoices $invoices)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Invoices  $invoices
  * @return \Illuminate\Http\Response
  */
  public function edit(Invoices $invoices)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Invoices  $invoices
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Invoices $invoices)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Invoices  $invoices
  * @return \Illuminate\Http\Response
  */
  public function destroy(Invoices $invoices)
  {
    //
  }
}

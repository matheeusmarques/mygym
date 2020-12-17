<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use App\Package;
use App\User;

use MercadoPago;
use Validator;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class InvoiceController extends Controller
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

    public function generate_invoice(Request $request){
      $this->validate($request, [
        'package_id' => 'required|integer',
        'user_id' => 'required|integer',
        'payment_method' => 'required',
      ]);

     if($validation->fails()){
       return response()json([
         'status' => '400',
         'message' => 'Dados inválidos',
       ]);

       $package = Package::findOrFail($request->input('package_id'));
       $user = User::findOrFail($request('user_id'));


       if($request->input('payment_method') == 'MercadoPago'){
         try {

           MercadoPago\SDK::setClientId(env("MP_CLIENT_KEY"));
           MercadoPago\SDK::setClientSecret(env('MP_SECRET_KEY'));


           $preference = new MercadoPago\Preference();
           $item = new MercadoPago\Item();

           $item->id = $package->id;
           $item->title = $package->name;
           $item->quantity = 1;
           $item->currency_id = "BRL";
           $item->unit_price = $package->price;

           $preference->items = array($item);

           $preference->notification_url = env('MP_NOTIFICATION_URL');


           $preference->external_reference = time().'_'.$user->email;

           $preference->save();

           $invoice = new Invoice([
             'user_id' => $request->input('user_id'),
             'created_by' => Auth::user()->id,
             'package_id' => $request->input('package_id'),
             'ref' => $preference->id,
             'value' => $package->price,
             'payment_method' => 'MercadoPago',
             'external_reference' => $preference->external_reference,
             'type' => 1,
           ]);

           $invoice->save();

           return response()->json([
             'status' => 200,
             'message' => 'Fatura gerada com sucesso!',
           ]);
         }catch (Exception $e) {
           return response()->json([
             'status' => 500,
             'message' => 'Error!',
           ]);
         }
       }else {
         $invoice = new Invoices([
           'user_id' => $request->input('user_id'),
           'package_id' => $request->input('package_id'),
           'created_by' => Auth::user()->id,

           'quantity' => $package->quantity,
           'ref' => time().$user->email,
           'price' => $package->price,
           'method' => 'Externo',
           'external_reference' => time().'_'.$user->email,
           'type' => 1,
           'status' => 'Pendente'
         ]);
         $invoice->save();

         return response()->json([
           'status' => 200,
           'message' => 'Fatura gerada com sucesso!',
         ]);
       }
     }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}

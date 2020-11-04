<?php

namespace App\Http\Controllers\Reseller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;
use App\Packages;
use App\Settings;
use App\Http\Controllers\Controller;

use Auth;
use Validator;
Use Exception;


class UserController extends Controller
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
    return view('dashboard2');
  }

  public function cdn(Request $request){
    $settings = Settings::orderBy('created_at', 'desc')->first();
    $user = User::findOrFail($request->input('id'));
    $username = explode('@', $user->email);

    if($user->is_cdn_active == 1){
      $json = json_decode(file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php?key=F8EBD133C14FE318BE82F421B99A6&action=disable_force_connection&username='.$username[0].'&server_id='.$settings->server_cdn));
      $user->is_cdn_active = 0;
    }else {
      $json = json_decode(file_get_contents('http://main.queroassistir.tv:25500/qatv_test.php?key=F8EBD133C14FE318BE82F421B99A6&action=force_connection&username='.$username[0].'&server_id='.$settings->server_cdn));
      $user->is_cdn_active = 1;
    }

    $user->save();

    return response()->json([
      'status' => $json->status,
      'message' => $json->message,
    ]);
  }

  public function get_data(){
    $user = User::where('created_by', Auth::user()->id)->where('role' , '0');
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="btn btn-info mb-2">Enviar SMS</button>';
      $button .= '&nbsp;&nbsp;';
      if($user->is_cdn_active == '0'){
        $button .= '<button href="#"
        data-id="'.$user->id.'"
        data-toggle="modal"
        data-target="#modal-cdn"
        data-is_cdn_active="'.$user->is_cdn_active.'"
        data-email="'.$user->email.'"
        type="button" name="delete" class="delete btn btn-success mb-2">Ativar CDN</button>';
        $button .= '&nbsp;&nbsp;';
      }else {
        $button .= '<button href="#"
        data-is_cdn_active="'.$user->is_cdn_active.'"
        data-id="'.$user->id.'"
        data-email="'.$user->email.'"
        data-toggle="modal"
        data-target="#modal-cdn"
        type="button" name="delete" class="delete btn btn-danger mb-2">Desativar CDN</button>';
        $button .= '&nbsp;&nbsp;';
      }
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerenciar Telas</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerenciar Plano</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->oackage_valid_until.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Bloquear</button>';
      $button .= '&nbsp;&nbsp;';
      return $button;
    })
    ->editColumn('package_id', function (User $user) {
      $package = Packages::where('id', $user->package_id)->firstOrFail();
      return $user->package->name;
    })
    ->editColumn('status', function (User $user) {
      if($user->status == 1){
        return '<span class="badge badge-success">Ativado</span>';
      }else {
        return '<span class="badge badge-danger"> Desativado </span';
      }
    })
    // ->editColumn('role', function (User $user) {
    //   if($user->role == 0){
    //     return '<span class="badge badge-primary">CLIENTE</span>';
    //   }elseif($user->role == 1) {
    //     return '<span class="badge badge-danger">ADMINISTRADOR</span';
    //   }elseif($user->role == 2) {
    //     return '<span class="badge badge-danger">REVENDEDOR</span';
    //   }else {
    //     return '<span class="badge badge-info">SUB-REVENDEDOR</span';
    //   }
    // })
    ->editColumn('created_at', function (User $user) {
      Carbon::setLocale('pt-BR');
      return Carbon::parse($user->created_at)->format('d/m/Y h:m');

    })
    ->editColumn('package_valid_until', function (User $user) {
      $dt = Carbon::create($user->package_valid_until);
      if($dt->isNextWeek() ||$dt->isToday() || $dt->isTomorrow()){
        return '<span class="badge badge-warning">'.$dt->format('d/m/Y h:m').'</span>';
      }else if($dt > Carbon::now()){
        return '<span class="badge badge-success">'.$dt->format('d/m/Y h:m').'</span';
      }else {
        return '<span class="badge badge-danger">'.$dt->format('d/m/Y h:m').'</span';
      }
    })
    // ->editColumn('is_cdn_active', function (User $user) {
    //   if($user->is_cdn_active == '0'){
    //     $cdn_active = '<button href="#"
    //     data-id="'.$user->id.'"
    //     data-toggle="modal"
    //     data-target="#modal-cdn-user"
    //     data-is_cdn_active="'.$user->is_cdn_active.'"
    //     type="button" name="delete" class="delete btn btn-success btn-sm">Ativar CDN</button>';
    //   }else {
    //     $cdn_active = '<button href="#"
    //     data-is_cdn_active="'.$user->is_cdn_active.'"
    //     data-id="'.$user->id.'"
    //     data-toggle="modal"
    //     data-target="#modal-cdn-user"
    //     type="button" name="delete" class="delete btn btn-danger btn-sm">Desativar CDN</button>';
    //   }
    //   return $cdn_active;
    // })
    // ->rawColumns(['action', 'is_cdn_active'])
    ->rawColumns(['action', 'status', 'role', 'package_valid_until'])
    // ->rawColumns(['is_cdn_active'])
    ->make(true);
  }

  public function get_data_active(){
    $user = User::where('role' , '0')->where('package_valid_until', '>', Carbon::now())->where('created_by', Auth::user()->id);
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="btn btn-info mb-2">Enviar SMS</button>';
      $button .= '&nbsp;&nbsp;';
      if($user->is_cdn_active == '0'){
        $button .= '<button href="#"
        data-id="'.$user->id.'"
        data-toggle="modal"
        data-target="#modal-cdn"
        data-is_cdn_active="'.$user->is_cdn_active.'"
        data-email="'.$user->email.'"
        type="button" name="delete" class="delete btn btn-success mb-2">Ativar CDN</button>';
        $button .= '&nbsp;&nbsp;';
      }else {
        $button .= '<button href="#"
        data-is_cdn_active="'.$user->is_cdn_active.'"
        data-id="'.$user->id.'"
        data-email="'.$user->email.'"
        data-toggle="modal"
        data-target="#modal-cdn"
        type="button" name="delete" class="delete btn btn-danger mb-2">Desativar CDN</button>';
        $button .= '&nbsp;&nbsp;';
      }
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerar Boleto</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->oackage_valid_until.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Bloquear</button>';
      $button .= '&nbsp;&nbsp;';
      return $button;
    })
    ->editColumn('package_id', function (User $user) {
      $package = Packages::where('id', $user->package_id)->firstOrFail();
      return $user->package->name;
    })
    ->editColumn('status', function (User $user) {
      if($user->status == 1){
        return '<span class="badge badge-success">Ativado</span>';
      }else {
        return '<span class="badge badge-danger"> Desativado </span';
      }
    })
    // ->editColumn('role', function (User $user) {
    //   if($user->role == 0){
    //     return '<span class="badge badge-primary">CLIENTE</span>';
    //   }elseif($user->role == 1) {
    //     return '<span class="badge badge-danger">ADMINISTRADOR</span';
    //   }elseif($user->role == 2) {
    //     return '<span class="badge badge-danger">REVENDEDOR</span';
    //   }else {
    //     return '<span class="badge badge-info">SUB-REVENDEDOR</span';
    //   }
    // })
    ->editColumn('created_at', function (User $user) {
      Carbon::setLocale('pt-BR');
      return Carbon::parse($user->created_at)->format('d/m/Y h:m');

    })
    // ->editColumn('package_valid_until', function (User $user) {
    //   Carbon::setLocale('pt_BR');
    //   return Carbon::parse($user->package_valid_until)->format('d/m/Y h:m');
    // })
    ->editColumn('package_valid_until', function (User $user) {
      $dt = Carbon::create($user->package_valid_until);
      if($dt->isNextWeek() ||$dt->isToday() || $dt->isTomorrow()){
        return '<span class="badge badge-warning">'.$dt->format('d/m/Y h:m').'</span>';
      }else if($dt > Carbon::now()){
        return '<span class="badge badge-success">'.$dt->format('d/m/Y h:m').'</span';
      }else {
        return '<span class="badge badge-danger">'.$dt->format('d/m/Y h:m').'</span';
      }
    })
    // ->editColumn('is_cdn_active', function (User $user) {
    //   if($user->is_cdn_active == '0'){
    //     $cdn_active = '<button href="#"
    //     data-id="'.$user->id.'"
    //     data-toggle="modal"
    //     data-target="#modal-cdn-user"
    //     data-is_cdn_active="'.$user->is_cdn_active.'"
    //     type="button" name="delete" class="delete btn btn-success btn-sm">Ativar CDN</button>';
    //   }else {
    //     $cdn_active = '<button href="#"
    //     data-is_cdn_active="'.$user->is_cdn_active.'"
    //     data-id="'.$user->id.'"
    //     data-toggle="modal"
    //     data-target="#modal-cdn-user"
    //     type="button" name="delete" class="delete btn btn-danger btn-sm">Desativar CDN</button>';
    //   }
    //   return $cdn_active;
    // })
    // ->rawColumns(['action', 'is_cdn_active'])
    ->rawColumns(['action', 'status', 'role', 'package_valid_until'])
    // ->rawColumns(['is_cdn_active'])
    ->make(true);
  }

  public function get_data_inactive(){
    $user = User::where('role' , '0')->where('package_valid_until', '<', Carbon::now())->where('created_by', Auth::user()->id);
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="btn btn-info mb-2">Enviar SMS</button>';
      $button .= '&nbsp;&nbsp;';
      if($user->is_cdn_active == '0'){
        $button .= '<button href="#"
        data-id="'.$user->id.'"
        data-toggle="modal"
        data-target="#modal-cdn"
        data-is_cdn_active="'.$user->is_cdn_active.'"
        data-email="'.$user->email.'"
        type="button" name="delete" class="delete btn btn-success mb-2">Ativar CDN</button>';
        $button .= '&nbsp;&nbsp;';
      }else {
        $button .= '<button href="#"
        data-is_cdn_active="'.$user->is_cdn_active.'"
        data-id="'.$user->id.'"
        data-email="'.$user->email.'"
        data-toggle="modal"
        data-target="#modal-cdn"
        type="button" name="delete" class="delete btn btn-danger mb-2">Desativar CDN</button>';
        $button .= '&nbsp;&nbsp;';
      }
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerar Boleto</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->oackage_valid_until.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Bloquear</button>';
      $button .= '&nbsp;&nbsp;';
      return $button;
    })
    ->editColumn('package_id', function (User $user) {
      $package = Packages::where('id', $user->package_id)->firstOrFail();
      return $user->package->name;
    })
    ->editColumn('status', function (User $user) {
      if($user->status == 1){
        return '<span class="badge badge-success">Ativado</span>';
      }else {
        return '<span class="badge badge-danger"> Desativado </span';
      }
    })
    // ->editColumn('role', function (User $user) {
    //   if($user->role == 0){
    //     return '<span class="badge badge-primary">CLIENTE</span>';
    //   }elseif($user->role == 1) {
    //     return '<span class="badge badge-danger">ADMINISTRADOR</span';
    //   }elseif($user->role == 2) {
    //     return '<span class="badge badge-danger">REVENDEDOR</span';
    //   }else {
    //     return '<span class="badge badge-info">SUB-REVENDEDOR</span';
    //   }
    // })
    ->editColumn('created_at', function (User $user) {
      Carbon::setLocale('pt-BR');
      return Carbon::parse($user->created_at)->format('d/m/Y h:m');

    })
    // ->editColumn('package_valid_until', function (User $user) {
    //   Carbon::setLocale('pt_BR');
    //   return Carbon::parse($user->package_valid_until)->format('d/m/Y h:m');
    // })
    ->editColumn('package_valid_until', function (User $user) {
      return '<span class="badge badge-danger">'.Carbon::parse($user->package_valid_until)->format('d/m/Y h:m').'</span>';
    })
    // ->editColumn('is_cdn_active', function (User $user) {
    //   if($user->is_cdn_active == '0'){
    //     $cdn_active = '<button href="#"
    //     data-id="'.$user->id.'"
    //     data-toggle="modal"
    //     data-target="#modal-cdn-user"
    //     data-is_cdn_active="'.$user->is_cdn_active.'"
    //     type="button" name="delete" class="delete btn btn-success btn-sm">Ativar CDN</button>';
    //   }else {
    //     $cdn_active = '<button href="#"
    //     data-is_cdn_active="'.$user->is_cdn_active.'"
    //     data-id="'.$user->id.'"
    //     data-toggle="modal"
    //     data-target="#modal-cdn-user"
    //     type="button" name="delete" class="delete btn btn-danger btn-sm">Desativar CDN</button>';
    //   }
    //   return $cdn_active;
    // })
    // ->rawColumns(['action', 'is_cdn_active'])
    ->rawColumns(['action', 'status', 'role', 'package_valid_until'])
    // ->rawColumns(['is_cdn_active'])
    ->make(true);
  }

  public function store(Request $request){
    $user = null;
    $validation = Validator::make($request->all(), [
      'email' => 'required',
      'cellphone'  => 'required',
      'password'  => 'required|min:8',
      'name' => 'required'
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }
    $current = new Carbon();
    $username = explode('@', $request->input('email'));

    $expire_date = strtotime('+ 4 hours');
    $max_connections = 1;

    $access_output = array(
      1,
      2,
      3,
    );

    $package = Packages::findOrFail($request->input('package_id'));
    $bouquets_id = explode(',', $package);

    $content = http_build_query(array(
      'api_key' => '97F7XKtacSYxPWV7eDZstH2CVzzmggzp',
      'action' => 'user',
      'sub' => 'reg',
      'username' =>  $username[0],
      'password' =>  $request->input('password'),
      'member_id' => 1,
      'max_connections' => $max_connections,
      'exp_date' => $expire_date,
      'force_server_id' => 0,
      'mac_address_mag' => '',
      'mac_address_e2' => '',
      'access_output' => $access_output,
      'bouquets_selected' => json_encode($bouquets_id),
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
    $result = json_decode(file_get_contents('http://main.queroassistir.tv:25500/iptv_api.php', null, $context));

    if($result->result != 0 || $result->data == null) {
      return response()->json([
        'status' => 500,
        'message' => 'Erro! Falha ao estabelecer conexão com o servidor de IPTV.',
      ]);
    }
    try {
      $user =  User::create([
        'name' => $request->input('name'),
        'package_id' => $request->input('package_id'),
        'package_valid_until' => $current->addHour(4),
        'email' =>  $request->input('email'),
        'role' => 0,
        'created_by' => Auth::user()->id,
        // 'is_reseller' => 0,
        // 'iptv_password' => $result->data->password,
        'cellphone' => $request->input('cellphone'),
        'password' => Hash::make($request->input('password')),
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => 'Error! User already exist.',
      ]);
    }

    return response()->json([
      'status' => 200,
      'message' => 'Conta criada com sucesso!',
    ]);
  }

  public function store_master(Request $request){
    $user = null;
    $validation = Validator::make($request->all(), [
      'email' => 'required',
      'cellphone'  => 'required',
      'password'  => 'required|min:4',
      'name' => 'required',
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }

    $user =  User::create([
      'name' => $request->input('name'),
      'email' =>  $request->input('email'),
      'role' => 2,
      'created_by' => Auth::user()->id,
      'credits' => $request->input('credits'),
      'cellphone' => $request->input('cellphone'),
      'password' => Hash::make($request->input('password')),
    ]);

    return response()->json([
      'status' => 200,
      'message' => 'Conta criada com sucesso!',
    ]);
  }

  public function store_admin(Request $request){
    $user = null;
    $validation = Validator::make($request->all(), [
      'email' => 'required',
      'cellphone'  => 'required',
      'password'  => 'required|min:4',
      'name' => 'required',
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }

    $user =  User::create([
      'name' => $request->input('name'),
      'email' =>  $request->input('email'),
      'role' => 1,
      'created_by' => Auth::user()->id,
      'cellphone' => $request->input('cellphone'),
      'password' => Hash::make($request->input('password')),
    ]);

    return response()->json([
      'status' => 200,
      'message' => 'Conta criada com sucesso!',
    ]);
  }

  public function edit(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'id' => 'required',
      'name'  => 'required',
      'role'  => 'required',
      'package_valid_until'  => 'required',
      'is_trial' => 'required',
      'status' => 'required',
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }


    try {
      $user = User::findOrFail($request->input('id'));

      $time = new Carbon($request->input('package_valid_until'));

      $user->update_validity($time->timestamp);

      if($user == FALSE){
        return response()->json([
          'status' => 400,
          'message' => 'Erro ao atualizar no painel de iptv',
        ]);
      }
      $user->name = $request->input('name');
      $user->cellphone = $request->input('cellphone');
      // $user->is_trial = $request->input('is_trial');
      $user->package_valid_until = $request->input('package_valid_until');
      $user->package_id = $request->input('package_id');
      $user->is_trial = $request->input('is_trial');
      $user->status = $request->input('status');
      $user->role = $request->input('role');
      $user->save();
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => 'Error!',
      ]);
    }

    return response()->json([
      'status' => 200,
      'message' => 'Atualizado com sucesso',
    ]);

  }

  public function edit_master(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'id' => 'required',
      'name'  => 'required',
      'cellphone'  => 'required',
      'status' => 'required',
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }


    try {
      $user = User::findOrFail($request->input('id'));
      $user->name = $request->input('name');
      $user->cellphone = $request->input('cellphone');
      $user->status = $request->input('status');
      $user->save();
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => 'Error!',
      ]);
    }

    return response()->json([
      'status' => 200,
      'message' => 'Atualizado com sucesso',
    ]);

  }

  public function edit_admin(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'id' => 'required',
      'name'  => 'required',
      'cellphone'  => 'required',
      'status' => 'required',
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }


    try {
      $user = User::findOrFail($request->input('id'));
      $user->name = $request->input('name');
      $user->cellphone = $request->input('cellphone');
      $user->status = $request->input('status');
      $user->save();
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => 'Error!',
      ]);
    }

    return response()->json([
      'status' => 200,
      'message' => 'Atualizado com sucesso',
    ]);

  }

  public function add_credits(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'id' => 'required',
      'credits'  => 'required'
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 500,
        'message' => 'Error! Dados inválidos.',
      ]);
    }


    try {
      $user = User::findOrFail($request->input('id'));
      $user->credits = $request->input('credits');
      $user->save();
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => 'Error!',
      ]);
    }

    return response()->json([
      'status' => 200,
      'message' => 'Atualizado com sucesso',
    ]);

  }

}

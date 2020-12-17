<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;
use App\Package;
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

  public function get_data(){
    $user = User::all()->where('role' , '0');
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="btn btn-info mb-2">Enviar SMS</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerar Boleto</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->package_valid_until.'"
      data-email="'.$user->email.'"
      data-role="'.$user->role.'"
      data-package_id="'.$user->package_id.'"
      data-cellphone="'.$user->cellphone.'"
      data-birthday="'.$user->birthday.'"
      data-status="'.$user->status.'"
      data-name="'.$user->name.'"
      name="edit" id="'.$user->id.'" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->oackage_valid_until.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      $button .= '&nbsp;&nbsp;';
      return $button;
    })
    ->editColumn('package_id', function (User $user) {
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

  public function get_data_resellers_masters(){
    $user = User::all()->where('role' , '2');
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerar Fatura</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-credits"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      data-credits="'.$user->credits.'"
      name="edit" id="'.$user->id.'" class="edit btn btn-info mb-2">Alterar Créditos</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-user"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      data-role="'.$user->role.'"
      data-cellphone="'.$user->cellphone.'"
      data-status="'.$user->status.'"
      data-is_trial="'.$user->is_trial.'"
      data-name="'.$user->name.'"
      name="edit" id="'.$user->id.'" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      $button .= '&nbsp;&nbsp;';
      return $button;
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

  public function get_data_admins(){
    $user = User::all()->where('role' , '3');
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-user"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      data-role="'.$user->role.'"
      data-cellphone="'.$user->cellphone.'"
      data-status="'.$user->status.'"
      data-is_trial="'.$user->is_trial.'"
      data-name="'.$user->name.'"
      name="edit" id="'.$user->id.'" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button disabled data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
      $button .= '&nbsp;&nbsp;';
      return $button;
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
    $user = User::all()->where('role' , '0')->where('package_valid_until', '>', Carbon::now());
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="btn btn-info mb-2">Enviar SMS</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerar Boleto</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->package_valid_until.'"
      data-email="'.$user->email.'"
      data-role="'.$user->role.'"
      data-package_id="'.$user->package_id.'"
      data-cellphone="'.$user->cellphone.'"
      data-status="'.$user->status.'"
      data-is_trial="'.$user->is_trial.'"
      data-name="'.$user->name.'"
      name="edit" id="'.$user->id.'" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->oackage_valid_until.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
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
    $user = User::all()->where('role' , '0')->where('package_valid_until', '<', Carbon::now());
    return datatables()->of($user)
    ->addColumn('action', function($user){
      $button = '<a href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="delete btn btn-success mb-2">Enviar WhatsApp</a>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button href="https://wa.me/55'.$user->cellphone.'"
      type="button" target="_blank" name="delete" class="btn btn-info mb-2">Enviar SMS</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-generate-invoice"
      data-id="'.$user->id.'"
      data-email="'.$user->email.'"
      type="button" name="delete" class="delete btn btn-warning mb-2">Gerar Boleto</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button type="button"
      data-toggle="modal"
      data-target="#modal-edit-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->package_valid_until.'"
      data-email="'.$user->email.'"
      data-role="'.$user->role.'"
      data-package_id="'.$user->package_id.'"
      data-cellphone="'.$user->cellphone.'"
      data-status="'.$user->status.'"
      data-name="'.$user->name.'"
      name="edit" id="'.$user->id.'" class="edit btn btn-primary mb-2">Editar</button>';
      $button .= '&nbsp;&nbsp;';
      $button .= '<button data-toggle="modal"
      data-target="#modal-delete-user"
      data-id="'.$user->id.'"
      data-package_valid_until="'.$user->oackage_valid_until.'"
      data-email="'.$user->email.'"
      data-name="'.$user->name.'"
      type="button" name="delete" class="delete btn btn-danger mb-2">Deletar</button>';
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
    $validation = Validator::make($request->all(), [
      'email' => 'required|unique:users,email|email',
      'name' => 'required|min:6',
      'cellphone'  => 'required|size:11',
      'birthday'  => 'required|size:8',
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Erro! Dados inválidos.',
      ]);
    }

    try {
      $user =  User::create([
        'name' => $request->input('name'),
        'gender' => $request->input('gender'),
        'email' =>  $request->input('email'),
        'birthday' => $request->input('birthday'),
        'cellphone' => $request->input('cellphone'),
        'city_id' => $request->input('city_id'),
        'package_id' => $request->input('package_id'),
        'role' => 0,
        'password' => Hash::make($request->input('email')),
      ]);
    } catch (Exception $e) {
      return response()->json([
        'status' => 500,
        'message' => $e->getMessage(),
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
        'status' => 400,
        'message' => 'Error! Dados inválidos.',
      ]);
    }

      $user =  User::create([
        'name' => $request->input('name'),
        'email' =>  $request->input('email'),
        'role' => 3,
        // 'created_by' => Auth::user()->id,
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
        'role' => 3,
        // 'created_by' => Auth::user()->id,
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
    ]);


    if ($validation->fails())
    {
      return response()->json([
        'status' => 400,
        'message' => 'Erro! Dados inválidos.',
      ]);
    }


    try {
      $user = User::findOrFail($request->input('id'));

      $user->name = $request->input('name');
      $user->birthday = $request->input('birthday');
      $user->cellphone = $request->input('cellphone');
      $user->status = $request->input('status');
      $user->gender = $request->input('gender');
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

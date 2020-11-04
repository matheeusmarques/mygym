<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
  * Where to redirect users after registration.
  *
  * @var string
  */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
  * Get a validator for an incoming registration request.
  *
  * @param  array  $data
  * @return \Illuminate\Contracts\Validation\Validator
  */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return \App\User
  */
  protected function create(array $data)
  {
    $current = new Carbon();
    $username = explode('@', $data['email']);

    $expire_date = strtotime('+ 4 hours');
    $max_connections = 1;

    $bouquet_ids = array(
      12,
      13,
      14,
      16,
      19);

      $access_output = array(
        1,
        2,
        3,
      );

      $content = http_build_query(array(
        'api_key' => '97F7XKtacSYxPWV7eDZstH2CVzzmggzp',
        'action' => 'user',
        'sub' => 'reg',
        'username' =>  $username[0],
        'password' =>  $data['password'],
        'member_id' => 1,
        'max_connections' => $max_connections,
        'exp_date' => $expire_date,
        'is_trial' => 1,
        'force_server_id' => 0,
        'mac_address_mag' => '',
        'mac_address_e2' => '',
        'access_output' => $access_output,
        'bouquets_selected' => json_encode($bouquet_ids)
      ));

      $context_options = array (
        'http' => array (
          'method' => 'POST',
          'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
          . "Content-Length: " . strlen($content) . "\r\n",
          'content' => $content
        )
      );

      $user = User::create([
        'name' => $data['name'],
        'package_id' => 1,
        'package_valid_until' => $current->addHour(4),
        'email' => $data['email'],
        'cellphone' => $data['cellphone'],
        'iptv_user' => $username[0],
        'is_trial' => 1,
        'iptv_password' => $data['password'],
        'password' => Hash::make($data['password']),
      ]);

      if($user->exists()){
        $context = stream_context_create($context_options);
        $result = json_decode(file_get_contents('http://main.queroassistir.tv:25500/iptv_api.php', null, $context));
        //
        //   $verify_code = base64_encode(time().'_'.$user->email);
        //   Mail::to($user->email)->send(new WelcomeMail($user->iptv_user, $user->iptv_password, $user->name, $verify_code));
        //
        //   $mail_log = new MailLogs;
        //
        //   if(count(Mail::failures()) > 0){
        //     $mail_log->user_id = $user->id;
        //     $mail_log->description = 'Erro ao enviar e-mail de bem-vindo';
        //     $mail_log->save();
        //   }else {
        //     $mail_log->user_id = $user->id;
        //     $mail_log->verify_code = $verify_code;
        //     $mail_log->description = 'Email de bem-vindo enviado com sucesso';
        //     $mail_log->save();
        //   }
        // }

        return $user;

      }

    }
  }

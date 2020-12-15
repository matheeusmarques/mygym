<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'Matheus Marques de Assis',
      'email' => 'matheeus.marques@live.com',
      'password' => Hash::make('marques1234'),
      'city_id' => 1,
      'birthday' => '12111998',
      'cellphone' => '44991586117',
      'role' => 3,
      'status' => '1',
      'gender' => 'M',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
  }
}

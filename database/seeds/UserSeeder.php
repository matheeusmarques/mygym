<?php

use Illuminate\Database\Seeder;

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
      'name' => Str::random(10),
      'email' => 'matheeus.marques@live.com',
      'password' => Hash::make('marques1234'),
    ]);
  }
}

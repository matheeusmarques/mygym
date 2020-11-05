<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class StateSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('states')->insert([
      'name' => 'Paraná',
      'acronym' => 'PR',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('states')->insert([
      'name' => 'São Paulo',
      'acronym' => 'SP',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('states')->insert([
      'name' => 'Amazonas',
      'acronym' => 'AM',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
  }
}

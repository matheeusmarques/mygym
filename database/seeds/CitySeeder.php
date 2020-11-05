<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitySeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('cities')->insert([
      'name' => 'Curitiba',
      'state_id' => '1',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Paranavai',
      'state_id' => '1',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Nova Aliança do Ivaí',
      'state_id' => '1',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'São Paulo',
      'state_id' => '2',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Santa Barbara do Oeste',
      'state_id' => '2',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Rosana',
      'state_id' => '2',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Manaus',
      'state_id' => '3',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Tefé',
      'state_id' => '3',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
    DB::table('cities')->insert([
      'name' => 'Japuré',
      'state_id' => '3',
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
  }
}

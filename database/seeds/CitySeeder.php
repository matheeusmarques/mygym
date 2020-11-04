<?php

use Illuminate\Database\Seeder;

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
      ]);
      DB::table('cities')->insert([
        'name' => 'Paranavai',
        'state_id' => '1',
      ]);
      DB::table('cities')->insert([
        'name' => 'Nova Aliança do Ivaí',
        'state_id' => '1',
      ]);
      DB::table('cities')->insert([
        'name' => 'São Paulo',
        'state_id' => '2',
      ]);
      DB::table('cities')->insert([
        'name' => 'Santa Barbara do Oeste',
        'state_id' => '2',
      ]);
      DB::table('cities')->insert([
        'name' => 'Rosana',
        'state_id' => '2',
      ]);
      DB::table('cities')->insert([
        'name' => 'São Paulo',
        'state_id' => 'SP',
      ]);
      DB::table('cities')->insert([
        'name' => 'Amazonas',
        'state_id' => 'AM',
      ]);
    }
}

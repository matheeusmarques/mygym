<?php

use Illuminate\Database\Seeder;

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
      ]);
      DB::table('states')->insert([
        'name' => 'São Paulo',
        'acronym' => 'SP',
      ]);
      DB::table('states')->insert([
        'name' => 'Amazonas',
        'acronym' => 'AM',
      ]);
    }
}

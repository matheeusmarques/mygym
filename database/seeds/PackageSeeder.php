<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('packages')->insert([
        'name' => 'Pacotão Damassa',
        'description' => 'Pacote com 30 dias de academia',
        'price' => 85.00,
        'status' => 1,
        'duration' => 30,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('packages')->insert([
        'name' => 'Pacotão Damassa 2',
        'description' => 'Pacote com 60 dias de academia',
        'price' => 160.00,
        'status' => 1,
        'duration' => 60,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('packages')->insert([
        'name' => 'Pacotão Damassa 3',
        'description' => 'Pacote com 90 dias de academia',
        'price' => 185.00,
        'status' => 1,
        'duration' => 60,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}

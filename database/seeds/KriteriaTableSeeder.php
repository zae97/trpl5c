<?php

use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('data_kriteria')->insert([
        'id'=> '1',
        'kriteria'=>'Competency',
      ]);
      DB::table('data_kriteria')->insert([
        'id'=> '2',
        'kriteria'=>'Capability',
      ]);
      DB::table('data_kriteria')->insert([
        'id'=> '3',
        'kriteria'=>'Commitment',
      ]);
      DB::table('data_kriteria')->insert([
        'id'=> '4',
        'kriteria'=>'Credibility',
      ]);
      DB::table('data_kriteria')->insert([
        'id'=> '5',
        'kriteria'=>'Character',
      ]);
      DB::table('data_kriteria')->insert([
        'id'=> '6',
        'kriteria'=>'Capacity',
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
          'id'=> 1,
          'title'=>'Soal Psikotes Tanggungjawab'
        ]);
        DB::table('topics')->insert([
          'id'=> 2,
          'title'=>'Soal Psikotes Integritas & Kejujuran'
        ]);
        DB::table('topics')->insert([
          'id'=> 3,
          'title'=>'Psikotes Inisiatif & Kreatifitas'
        ]);

    }
}

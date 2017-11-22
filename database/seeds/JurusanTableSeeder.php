<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jurusan_jabatan')->insert([
        'id'=> '1',
        'jabatan_id'=>1,
        'jurusan'=>'SI/TI',
        'point'=> 25,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '2',
        'jabatan_id'=>2,
        'jurusan'=>'SI/TI',
        'point'=> 19,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '3',
        'jabatan_id'=>3,
        'jurusan'=>'SI/TI',
        'point'=> 15,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '4',
        'jabatan_id'=>4,
        'jurusan'=>'SOSPOL/HUKUM',
        'point'=> 15,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '5',
        'jabatan_id'=>5,
        'jurusan'=>'SOSPOL/HUKUM',
        'point'=> 15,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '6',
        'jabatan_id'=>6,
        'jurusan'=>'SOSPOL/HUKUM',
        'point'=> 20,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '7',
        'jabatan_id'=>7,
        'jurusan'=>'SOSPOL/HUKUM',
        'point'=> 15,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '8',
        'jabatan_id'=>8,
        'jurusan'=>'SOSPOL/HUKUM',
        'point'=> 13,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '9',
        'jabatan_id'=>9,
        'jurusan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'point'=> 25,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '10',
        'jabatan_id'=>10,
        'jurusan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'point'=> 25,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '11',
        'jabatan_id'=>6,
        'jurusan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'point'=> 22,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '12',
        'jabatan_id'=>11,
        'jurusan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'point'=> 22,
      ]);
      DB::table('jurusan_jabatan')->insert([
        'id'=> '13',
        'jabatan_id'=>5,
        'jurusan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'point'=> 20,
      ]);
    }
}

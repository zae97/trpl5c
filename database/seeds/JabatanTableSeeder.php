<?php

use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '1',
        'jabatan'=>'IT Support',
        'kriteria_jabatan'=>'SI/TI',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '2',
        'jabatan'=>'Supervisor',
        'kriteria_jabatan'=>'SI/TI',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '3',
        'jabatan'=>'Operasional Staff',
        'kriteria_jabatan'=>'SI/TI',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '4',
        'jabatan'=>'Halpdesk Support',
        'kriteria_jabatan'=>'HUKUM/SOSPOL',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '5',
        'jabatan'=>'Teller',
        'kriteria_jabatan'=>'HUKUM/SOSPOL',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '6',
        'jabatan'=>'Asist Manager',
        'kriteria_jabatan'=>'HUKUM/SOSPOL',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '7',
        'jabatan'=>'Frontliner',
        'kriteria_jabatan'=>'HUKUM/SOSPOL',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '8',
        'jabatan'=>'Loket',
        'kriteria_jabatan'=>'HUKUM/SOSPOL',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '9',
        'jabatan'=>'Bussiness Analyst',
        'kriteria_jabatan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '10',
        'jabatan'=>'Administration',
        'kriteria_jabatan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
      DB::table('jabatan')->insert([
        'kode_jabatan'=> '11',
        'jabatan'=>'Akun Staff',
        'kriteria_jabatan'=>'EKONOMI/AKUTANSi/MANAGEMEN',
        'gaji'=>0,
        'tunjangan'=>0,
        'masa_kerja'=> '255hari',
      ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'id'=> '1',
        'name'=> 'admin_pos',
        'email'=>'admin@pos.com',
        'ha'=> 'admin',
        'password'=>bcrypt('pos1234567890'),
      ]);
      DB::table('users')->insert([
        'id'=> '2',
        'name'=> 'hrd_pos',
        'email'=>'hrd@pos.com',
        'ha'=> 'hrd',
        'password'=>bcrypt('pos1234567890'),
      ]);
      DB::table('user2s')->insert([
        'id'=> '1',
        'name'=> 'pelamar',
        'email'=>'pelamar@hati.com',
        'alamat'=> 'jl yang tak pernah ada',
        'ttl'=> '2017-10-05',
        'jk'=> 'pria',
        'no_tlp' => '0811111111',
        'pddk_thr' => 'SI/TI',
        'minat' => 'IT Support',
        'agama' => 'islam',
        'status' => 'verifikasi',
        'password'=>bcrypt('pos1234567890'),
      ]);
      DB::table('user2s')->insert([
        'id'=> '2',
        'name'=> 'pelamar2',
        'email'=>'pelamar2@hati.com',
        'alamat'=> 'jl yang tak pernah ada',
        'ttl'=> '2017-10-05',
        'jk'=> 'pria',
        'no_tlp' => '0811111111',
        'pddk_thr' => 'SI/TI',
        'minat' => 'IT Support',
        'agama' => 'islam',
        'status' => 'verifikasi',
        'password'=>bcrypt('pos1234567890'),
      ]);
    }
}

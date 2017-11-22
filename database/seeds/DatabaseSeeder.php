<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(SoalTableSeeder::class);
        $this->call(JawabanTableSeeder::class);
        $this->call(KriteriaTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(JabatanTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
    }
}

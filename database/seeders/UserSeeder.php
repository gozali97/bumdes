<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => bcrypt('admin'),
            'hak_akses' => '0',
            'province_id' => '20',
            'city_id' => '20',
            'jekel' => 'laki-laki',
            'nama_instansi' => 'UTY',
            'jabatan' => 'staf',
            'no_tlp' => '0918431',
        ]);
    }
}

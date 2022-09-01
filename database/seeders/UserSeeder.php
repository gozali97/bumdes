<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'name' => Str::random(10) . 'ahmad',
            'email' => Str::random(10) . 'ahmad@gmail.com',
            'password' => bcrypt('admin'),
            'hak_akses' => Str::random(10) . '0',
            'province_id' => Str::random(50) . '20',
            'city_id' => Str::random(50) . '20',
            'jekel' => Str::random(50) . 'laki-laki',
            'nama_instansi' => Str::random(50) . 'UTY',
            'jabatan' => Str::random(50) . 'staf',
            'no_tlp' => Str::random(50) . '0918431',
        ]);
    }
}

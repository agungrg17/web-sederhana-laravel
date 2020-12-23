<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Andi saputra',
            'nis' => '101',
            'tanggal_lahir' => '2000-10-10'
        ]);

        DB::table('siswa')->insert([
            'nama' => 'Budi Cahya',
            'nis' => '102',
            'tanggal_lahir' => '2000-11-11'
        ]);
    }
}

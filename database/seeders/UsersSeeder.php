<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt ('password123') 
        ]);
        DB::table('users')->insert([
            'name' => 'Andi Saputra',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'andi@sma404.com',
            'password' => bcrypt ('password789') 
        ]);
        DB::table('users')->insert([
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'budi@sma404.com',
            'password' => bcrypt ('password456') 
        ]);
        DB::table('users')->insert([
            'name' => 'Agung Rakhmat',
            'role' => 'siswa',
            'siswa_id' => 3,
            'email' => 'agung@sma404.com',
            'password' => bcrypt ('password321') 
        ]);
    }
}

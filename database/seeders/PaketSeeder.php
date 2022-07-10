<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM paket_hostings");
        DB::table('paket_hostings')->insert([
            'id'=>1,
            'nama' => 'Bayi'
            , 'harga' => 19900
            , 'harga_final' => 14900
            , 'pengguna' => 938
            , 'diskon' => 0
        ]); 
        DB::table('paket_hostings')->insert([
            'id'=>2,
            'nama' => 'Pelajar'
            , 'harga' => 46900
            , 'harga_final' => 23450
            , 'pengguna' => 4168
            , 'diskon' => 0
        ]); 
        DB::table('paket_hostings')->insert([
            'id'=>3,
            'nama' => 'Personal'
            , 'harga' => 58900
            , 'harga_final' => 38900
            , 'pengguna' => 10017
            , 'diskon' => 0
            , 'best_seller' => 1
        ]); 
        DB::table('paket_hostings')->insert([
            'id'=>4,
            'nama' => 'Bisnis'
            , 'harga' => 109900
            , 'harga_final' => 65900
            , 'pengguna' => 3552
            , 'diskon' => 40
        ]); 
    }
}

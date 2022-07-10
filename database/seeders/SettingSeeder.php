<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM settings");
        DB::table('settings')->insert(['key' => 'pengumuman', 'value' => 'Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]']); 
        DB::table('settings')->insert(['key' => 'telp', 'value' => '0274-5305505']); 
        DB::table('settings')->insert(['key' => 'jam_kerja', 'value' => 'Senin - Minggu <br>24 Jam Nonstop']); 
        DB::table('settings')->insert(['key' => 'alamat', 'value' => 'Jl. Selokan Mataram Monjali Karangjati MT I/304 <br>Sinduadi, Mlati, Sleman Yogyakarta 55284']); 
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketTermasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM paket_termasuk");
        DB::table('paket_termasuk')->insert(['judul' => 'PHP Semua Versi', 'ket' => 'Pilih mulai dari versi PHP 5.3 s/d PHP7. Ubah sesuka Anda!', 'path'=>'assets/svg/Hosting_PHPSemuaVersi.svg']);
        DB::table('paket_termasuk')->insert(['judul' => 'MySQL Versi 5.6', 'ket' => 'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur', 'path'=>'assets/svg/Hosting_MySQL.svg']);
        DB::table('paket_termasuk')->insert(['judul' => 'Panel Hosting cPanel', 'ket' => 'Kelola website dengan panel canggih yang familiar di hari Anda', 'path'=>'assets/svg/Hosting_CPanel.svg']);
        DB::table('paket_termasuk')->insert(['judul' => 'Garansi Uptime 99.9%', 'ket' => 'Data center yang mendukung kelangsungan website Anda 24/7', 'path'=>'assets/svg/Hosting_garansiuptime.svg']);
        DB::table('paket_termasuk')->insert(['judul' => 'Database InnoDB Unlimited', 'ket' => 'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda', 'path'=>'assets/svg/Hosting_InnoDB.svg']);
        DB::table('paket_termasuk')->insert(['judul' => 'Wildcard Remote MySQL', 'ket' => 'Mendukung s/d 25 max_user_connections dan 100 max_connections', 'path'=>'assets/svg/Hosting_MySQLremote.svg']); 
    }
}

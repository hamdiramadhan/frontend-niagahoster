<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM footer_list");
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Domain']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Shared Hosting']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Cloud VPS Hosting']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Managed VPS Hosting']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Web Builder']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Keamanan SSL / HTTPS']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Jasa Pembuatan Website']);
        DB::table('footer_list')->insert(['jenis'=>'layanan', 'nama'=>'Program Afiliasi']);

        DB::table('footer_list')->insert(['jenis'=>'service', 'nama'=>'Hosting Murah']);
        DB::table('footer_list')->insert(['jenis'=>'service', 'nama'=>'Hosting Indonesia']);
        DB::table('footer_list')->insert(['jenis'=>'service', 'nama'=>'Hosting Singapura SG']);
        DB::table('footer_list')->insert(['jenis'=>'service', 'nama'=>'Hosting PHP']);
        DB::table('footer_list')->insert(['jenis'=>'service', 'nama'=>'Hosting Wordpress']);
        DB::table('footer_list')->insert(['jenis'=>'service', 'nama'=>'Hosting Laravel']);

        DB::table('footer_list')->insert(['jenis'=>'tutorial', 'nama'=>'Knowledgebase']);
        DB::table('footer_list')->insert(['jenis'=>'tutorial', 'nama'=>'Blog']);
        DB::table('footer_list')->insert(['jenis'=>'tutorial', 'nama'=>'Cara Pembayaran']);

        DB::table('footer_list')->insert(['jenis'=>'tentang', 'nama'=>'Tim Niagahoster']);
        DB::table('footer_list')->insert(['jenis'=>'tentang', 'nama'=>'Karir']);
        DB::table('footer_list')->insert(['jenis'=>'tentang', 'nama'=>'Events']);
        DB::table('footer_list')->insert(['jenis'=>'tentang', 'nama'=>'Penawaran & Promo Spesial']);
        DB::table('footer_list')->insert(['jenis'=>'tentang', 'nama'=>'Kontak Kami']);

        DB::table('footer_list')->insert(['jenis'=>'kenapa', 'nama'=>'Support Terbaik']);
        DB::table('footer_list')->insert(['jenis'=>'kenapa', 'nama'=>'Garansi Harga Termurah']);
        DB::table('footer_list')->insert(['jenis'=>'kenapa', 'nama'=>'Domain Gratis Selamanya']);
        DB::table('footer_list')->insert(['jenis'=>'kenapa', 'nama'=>'Datacenter Hosting Terbaik']);
        DB::table('footer_list')->insert(['jenis'=>'kenapa', 'nama'=>'Review Pelanggan']); 
    }
}

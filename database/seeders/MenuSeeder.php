<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM menus");
        DB::table('menus')->insert(['menu' => 'Hosting']);
        DB::table('menus')->insert(['menu' => 'Domain']);
        DB::table('menus')->insert(['menu' => 'Server']);
        DB::table('menus')->insert(['menu' => 'Website']);
        DB::table('menus')->insert(['menu' => 'Afiliasi']);
        DB::table('menus')->insert(['menu' => 'Promo']);
        DB::table('menus')->insert(['menu' => 'Pembayaran']);
        DB::table('menus')->insert(['menu' => 'Review']);
        DB::table('menus')->insert(['menu' => 'Kontak']);
        DB::table('menus')->insert(['menu' => 'Blog']); 
    }
}

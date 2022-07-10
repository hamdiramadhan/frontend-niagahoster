<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM paket_hosting_details");
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>0.5X RESOURCE POWER</b>' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>500 MB</b> Disk Space' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>Unlimited</b> Bandwidth' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>Unlimited</b> Databases' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>1</b> Domain' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>Instant</b> Backup' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>1,
            'detail' => '<b>Unlimited SSL</b> Gratis Selamanya' 
        ]); 


        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>1X RESOURCE POWER</b>' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Unlimited</b> Disk Space' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Unlimited</b> Bandwidth' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Unlimited</b> POP3 Email' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Unlimited</b> Databases' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>10</b> Addon Domain' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Instant</b> Backup' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Domain Gratis</b> Gratis Selamanya' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>2,
            'detail' => '<b>Unlimited SSL</b> Gratis Selamanya' 
        ]); 


        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>2X RESOURCE POWER</b>' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Unlimited</b> Disk Space' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Unlimited</b> Bandwidth' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Unlimited</b> POP3 Email' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Unlimited</b> Databases' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Unlimited</b> Addon Domain' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Instant</b> Backup' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Domain Gratis</b> Gratis Selamanya' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Unlimited SSL</b> Gratis Selamanya' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>Private</b> Name Server' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>3,
            'detail' => '<b>SpamAssasin</b> Mail Protection' 
        ]); 


        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>3X RESOURCE POWER</b>' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Unlimited</b> Disk Space' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Unlimited</b> Bandwidth' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Unlimited</b> POP3 Email' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Unlimited</b> Databases' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Unlimited</b> Addon Domain' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Magic Auto</b> Backup & Restore' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Domain Gratis</b> Gratis Selamanya' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Unlimited SSL</b> Gratis Selamanya' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Private</b> Name Server' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Prioritas</b> Layanan Support' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></b>' 
        ]); 
        DB::table('paket_hosting_details')->insert([
            'paket_hosting_id'=>4,
            'detail' => '<b>Spam Expert</b> Pro Mail Protection' 
        ]); 
    }
}

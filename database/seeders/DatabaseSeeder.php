<?php

namespace Database\Seeders;

use App\Models\PaketTermasuk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        $this->call(SettingSeeder::class); 
        $this->call(PaketSeeder::class); 
        $this->call(PaketDetailSeeder::class); 
        $this->call(MenuSeeder::class); 
        $this->call(PaketTermasukSeeder::class); 
        $this->call(ModulSeeder::class); 
        $this->call(FooterSeeder::class); 
    }
}

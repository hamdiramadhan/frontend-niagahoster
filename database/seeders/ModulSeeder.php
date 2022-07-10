<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::select("DELETE FROM moduls");
        DB::table('moduls')->insert(['nama' => 'IcePHP']);
        DB::table('moduls')->insert(['nama' => 'apc']);
        DB::table('moduls')->insert(['nama' => 'apcu']);
        DB::table('moduls')->insert(['nama' => 'apm']);
        DB::table('moduls')->insert(['nama' => 'ares']);
        DB::table('moduls')->insert(['nama' => 'bcmath']);
        DB::table('moduls')->insert(['nama' => 'bcompiler']);
        DB::table('moduls')->insert(['nama' => 'big_int']);
        DB::table('moduls')->insert(['nama' => 'bitset']);
        DB::table('moduls')->insert(['nama' => 'bloomy']);
        DB::table('moduls')->insert(['nama' => 'bz2_filter']);
        DB::table('moduls')->insert(['nama' => 'clamav']);
        DB::table('moduls')->insert(['nama' => 'coin_acceptor']);
        DB::table('moduls')->insert(['nama' => 'crack']);
        DB::table('moduls')->insert(['nama' => 'dba']);
        
        DB::table('moduls')->insert(['nama' => 'http']);
        DB::table('moduls')->insert(['nama' => 'huffman']);
        DB::table('moduls')->insert(['nama' => 'idn']);
        DB::table('moduls')->insert(['nama' => 'igbinary']);
        DB::table('moduls')->insert(['nama' => 'imagick']);
        DB::table('moduls')->insert(['nama' => 'imap']);
        DB::table('moduls')->insert(['nama' => 'inclued']);
        DB::table('moduls')->insert(['nama' => 'inotify']);
        DB::table('moduls')->insert(['nama' => 'interbase']);
        DB::table('moduls')->insert(['nama' => 'intl']);
        DB::table('moduls')->insert(['nama' => 'ioncube_loader']);
        DB::table('moduls')->insert(['nama' => 'ioncube_loader_4']);
        DB::table('moduls')->insert(['nama' => 'jsmin']);
        DB::table('moduls')->insert(['nama' => 'json']);
        DB::table('moduls')->insert(['nama' => 'ldap']);
        
        DB::table('moduls')->insert(['nama' => 'nd_pdo_mysql']);
        DB::table('moduls')->insert(['nama' => 'oauth']);
        DB::table('moduls')->insert(['nama' => 'oci8']);
        DB::table('moduls')->insert(['nama' => 'odbc']);
        DB::table('moduls')->insert(['nama' => 'opcache']);
        DB::table('moduls')->insert(['nama' => 'pdf']);
        DB::table('moduls')->insert(['nama' => 'pdo']);
        DB::table('moduls')->insert(['nama' => 'pdo_dblib']);
        DB::table('moduls')->insert(['nama' => 'pdo_firebird']);
        DB::table('moduls')->insert(['nama' => 'pdo_mysql']);
        DB::table('moduls')->insert(['nama' => 'pdo_odbc']);
        DB::table('moduls')->insert(['nama' => 'pdo_pgsql']);
        DB::table('moduls')->insert(['nama' => 'pdo_sqlite']);
        DB::table('moduls')->insert(['nama' => 'pgsql']);
        DB::table('moduls')->insert(['nama' => 'phalcon']);

        DB::table('moduls')->insert(['nama' => 'stats']);
        DB::table('moduls')->insert(['nama' => 'stem']);
        DB::table('moduls')->insert(['nama' => 'stomp']);
        DB::table('moduls')->insert(['nama' => 'suhosin']);
        DB::table('moduls')->insert(['nama' => 'sybase_ct']);
        DB::table('moduls')->insert(['nama' => 'sysvmsg']);
        DB::table('moduls')->insert(['nama' => 'sysvsem']);
        DB::table('moduls')->insert(['nama' => 'sysvshm']);
        DB::table('moduls')->insert(['nama' => 'tidy']);
        DB::table('moduls')->insert(['nama' => 'timezonedb']);
        DB::table('moduls')->insert(['nama' => 'trade']);
        DB::table('moduls')->insert(['nama' => 'translit']);
        DB::table('moduls')->insert(['nama' => 'uploadprogress']);
        DB::table('moduls')->insert(['nama' => 'uri_template']);
        DB::table('moduls')->insert(['nama' => 'uuid']);
    }
}

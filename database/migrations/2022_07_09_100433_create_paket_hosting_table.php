<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketHostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_hostings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->double('harga');
            $table->double('harga_final');
            $table->integer('pengguna');
            $table->integer('diskon')->default(0)->comment("0=tidak ada diskon, diatas 0 dianggap ada diskon");
            $table->integer('best_seller')->default(0)->comment("0=tidak ada bestseller, diatas 0 dianggap bestseller");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_hostings');
    }
}

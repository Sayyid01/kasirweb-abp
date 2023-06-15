<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_drink', function(Blueprint $table){
            $table->id();
            $table->string('nama_menu');
            $table->string('foto_menu');
            $table->string('keterangan');
            $table->integer('jml_stok')->default(0);
            $table->integer('harga')->default(0);
            $table->date('last_update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_drink');
    }
};

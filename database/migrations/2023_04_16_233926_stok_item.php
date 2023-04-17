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
        Schema::create('stok_item', function(Blueprint $table){
            $table->id();
            $table->string('nama_barang');
            $table->decimal('jml_stok');
            $table->date('expired');
            $table->date('last_update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_item');
    }
};

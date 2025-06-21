<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('penjualans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('barang_id')->constrained()->onDelete('cascade');
        $table->integer('jumlah');
        $table->integer('total_harga');
        $table->date('tanggal');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};

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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('id_parkir', 11);

             $table->foreign('id_kendaraan')
                   ->references('id_kendaraan')
                   ->on('tb_kendaraan')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');

            $table->dateTime('waktu_masuk');

            $table->dateTime('waktu_keluar');

            $table->foreign('id_tarif')
                   ->references('id_tarif')
                   ->on('tb_tarif')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');

            $table->integer('durasi_jam', 5);

            $table->decimal('biaya_total', 10,0);

            $table->enum('status', ['masuk','keluar']);

            $table->foreign('id_user')
                   ->references('id_user')
                   ->on('tb_user')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');

            $table->integer('id_area', 11);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};

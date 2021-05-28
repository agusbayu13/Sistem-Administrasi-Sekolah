<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('kelas', 100);
            $table->string('nis', 20);
            $table->string('jenis_pembayaran', 100);
            $table->string('kode_pembayaran', 100);
            $table->date('tgl_pembayaran', 10);
            $table->string('bukti_pembayaran', 10);
            $table->string('total_pembayaran', 20);
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
        Schema::dropIfExists('pembayaran');
    }
}

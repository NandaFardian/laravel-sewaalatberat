<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->string('kd_sewa');
            $table->string('nama_pen');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('tanggal_sewa');
            $table->string('tanggal_kembali');
            $table->biginteger('alatberats_id');
            $table->string('jumlah');
            $table->string('biaya_ope');
            $table->string('pajak');
            $table->string('total_biaya');
            $table->string('foto')->default('default.jpg');
            $table->string('status');
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
        Schema::dropIfExists('sewas');
    }
};

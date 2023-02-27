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
        Schema::create('daftarhadirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('npsn')->nullable();
            $table->string('nama_lembaga')->nullable();
            $table->string('kabkota')->nullable();
            $table->string('unsur')->nullable();
            $table->string('unit')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('norek')->nullable();
            $table->string('hp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('judul_dh')->nullable();
            $table->string('kat_dh')->nullable();
            $table->string('ttd')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftarhadirs');
    }
};

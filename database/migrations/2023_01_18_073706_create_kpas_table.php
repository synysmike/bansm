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
        Schema::create('kpas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();  
            $table->string('id_user')->nullable();         
            $table->string('tgl_lhr')->nullable();
            $table->string('k_asal')->nullable();
            $table->string('unit')->nullable();
            $table->string('unsur')->nullable();
            $table->string('nohp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('norek')->nullable();
            $table->text('alamat_k')->nullable();
            $table->text('alamat_r')->nullable();
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
        Schema::dropIfExists('kpas');
    }
};

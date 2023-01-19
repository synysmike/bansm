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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('npsn');
            $table->string('nama')->nullable();
            $table->string('id_user')->nullable();
            $table->string('no_ks')->nullable();
            $table->string('slug')->unique();
            $table->string('jenjang1')->nullable();
            $table->string('jenjang2')->nullable();
            $table->string('status')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kab_kota')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tahun_akre')->nullable();
            $table->string('nilai_akhir')->nullable();
            $table->string('peringkat')->nullable();
            $table->string('no_sk')->nullable();
            $table->string('tgl_sk')->nullable();
            $table->string('status_sasaran')->nullable();
            $table->boolean('kondisi')->default(1);
            $table->text('keterangan')->nullable();
            $table->string('tahap_visit')->nullable();
            $table->string('kelas')->nullable();
            $table->string('kuota_bt')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('sekolahs');
    }
};

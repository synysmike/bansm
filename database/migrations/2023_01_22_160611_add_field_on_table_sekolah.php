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
        Schema::table('sekolahs', function (Blueprint $table) {
            $table->string('namaks')->nullable();
            $table->string('namapj')->nullable();
            $table->string('hppj')->nullable();
            $table->string('file_ijop')->nullable();
            $table->string('masa_ijop')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sekolahs', function (Blueprint $table) {
            $table->dropColumn('namaks');
            $table->dropColumn('namapj');
            $table->dropColumn('hppj');
            $table->dropColumn('file_ijop');
            $table->dropColumn('masa_ijop');
        });
    }
};

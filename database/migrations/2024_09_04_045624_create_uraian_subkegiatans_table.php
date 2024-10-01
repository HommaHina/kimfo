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
        Schema::create('uraian_subkegiatans', function (Blueprint $table) {
            $table->increments('id_uraian_subkegiatan');
            $table->integer('id_subkegiatan')->unsigned();
            $table->integer('id_kegiatan')->unsigned()->nullable();;
            $table->integer('id_program')->unsigned()->nullable();;
            $table->string('kode_rekening', 100)->nullable();
            $table->string('uraian')->nullable();
            $table->string('pagu', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uraian_subkegiatans');
    }
};

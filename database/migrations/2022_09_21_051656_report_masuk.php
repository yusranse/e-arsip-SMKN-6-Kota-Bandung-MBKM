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
        Schema::create('report_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('no_surat');
            $table->string('judul_surat')->unique();
            $table->boolean('indeks_surat')->unique();
            $table->string('asal_surat')->unique();
            $table->date('tanggal_masuk')->unique();
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
        Schema::dropIfExists('report_masuk');
    }
};

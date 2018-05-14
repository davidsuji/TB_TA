<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasAkhirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_akhirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIM');
            $table->string('Nama_Mahasiswa');
            $table->string('Jenis_Kelamin');
            $table->string('Jurusan');
            $table->string('Judul_TA');
            $table->string('Dosen_Pembimbing');
            $table->string('Gambar');
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
        Schema::dropIfExists('tugas_akhirs');
    }
}

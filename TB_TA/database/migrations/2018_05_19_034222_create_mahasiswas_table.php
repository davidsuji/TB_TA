<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIM');
            $table->string('Nama_Mahasiswa');
            $table->string('Jenis_Kelamin');
            $table->string('Alamat');
            $table->string('Fakultas');
            $table->string('Jurusan');
            $table->string('IPK');
            $table->string('Jumlah_SKS');            
            $table->string('No_Hp');
            $table->string('Gambar');
            $table->string('Bukti_Pembayaran');
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
        Schema::dropIfExists('mahasiswas');
    }
}

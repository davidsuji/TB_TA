<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasAkhir extends Model
{
    //
    protected $fillable = ['NIM','Nama_Mahasiswa', 'Jenis_Kelamin', 'Jurusan', 'Judul_TA', 'Dosen_Pembimbing', 'Gambar'];
}

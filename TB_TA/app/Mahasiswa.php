<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable =
    [
    	'NIM',
    	'Nama_Mahasiswa',
    	'Jenis_Kelamin',
    	'Alamat',
    	'Fakultas',
    	'Jurusan',
    	'IPK',
    	'Jumlah_SKS',
    	'No_Hp',
    	'Gambar',
    	'Bukti_Pembayaran',
    ];
}

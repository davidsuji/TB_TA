<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //NIP Nama_Dosen Jurusan Bidang_Keahlian No_Hp
    protected $fillable =
    [
    	'NIP',
    	'Nama_Dosen',
    	'Jurusan',
    	'Bidang_Keahlian',
    	'No_Hp',
    ];
}

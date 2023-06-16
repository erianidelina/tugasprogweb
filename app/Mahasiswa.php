<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //membaca data
    // $table tidak dapat diganti, jika diganti maka data tidak terbaca karena bukan variabel 
    protected $table = 'mahasiswa';

    //manipulasi data
    protected $fillable = [ //boleh diisi
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];
}

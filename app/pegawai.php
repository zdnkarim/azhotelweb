<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['nama_karyawan','id_karyawan','jenis_kelamin','user_id'];
}

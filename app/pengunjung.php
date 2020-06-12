<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    protected $table='pengunjung';
    protected $fillable = ['nama_pengunjung','id_pengunjung','alamat_pengunjung','user_id','jk_pengunjung', 'telpon_pengunjung', 'ktp_pengunjung'];
}

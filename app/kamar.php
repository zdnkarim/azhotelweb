<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table =  'kamar';
    protected $fillable = ['id_kamar','nama_kamar','lantai_kamar','status_kamar'];
}

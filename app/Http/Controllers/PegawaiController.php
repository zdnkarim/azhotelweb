<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function tampil_pegawai(){
        $pegawai = DB::table('pegawai2')->get();

        return view('data_pegawai',['pegawai'=>$pegawai]);
    }
}

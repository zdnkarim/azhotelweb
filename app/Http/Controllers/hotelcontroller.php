<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelcontroller extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\pegawai::where('nama_karyawan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_hotel = \App\pegawai::all();
        }
        return view('hotel.index',['data_hotel' => $data_hotel]);
    }

    public function create(Request $request)
    {
        //insert ke table users
        $user = new \App\user;
        $user->role = $request='pegawai';
        $user->name = $request->nama_karyawan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->save();

         //insert ke table pegawai
         $request->request->add(['user_id' => $user->id ]);
         $pegawai = \App\pegawai::create($request->all()); 

        return redirect('/hotel')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $pegawai = \App\pegawai::find($id);
        return view('/hotel/edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request,$id)
    {
        $pegawai = \App\pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/hotel')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $pegawai = \App\pegawai::find($id);
        $pegawai->delete();
        return redirect('/hotel')->with('sukses','Data berhasil dihapus');
    }
    
}

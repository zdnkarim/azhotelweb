<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengunjungcontroller extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pengunjung = \App\pengunjung::where('nama_pengunjung','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pengunjung = \App\pengunjung::all();
        }
        return view('pengunjung.index',['data_pengunjung' => $data_pengunjung]);
    }

    public function create(Request $request)
    {
        
         $pengunjung = \App\pengunjung::create($request->all()); 
         

        return redirect('/pengunjung')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $pengunjung = \App\pengunjung::find($id);
        return view('/pengunjung/edit',['pengunjung' => $pengunjung]);
    }

    public function update(Request $request,$id)
    {
        $pengunjung = \App\pengunjung::find($id);
        $pengunjung->update($request->all());
        return redirect('/pengunjung')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $pengunjung = \App\pengunjung::find($id);
        $pengunjung->delete();
        return redirect('/pengunjung')->with('sukses','Data berhasil dihapus');
    }
}

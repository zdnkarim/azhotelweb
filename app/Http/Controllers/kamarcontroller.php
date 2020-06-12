<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kamarcontroller extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_kamar = \App\kamar::where('nama_kamar','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_kamar = \App\kamar::all();
        }
        return view('kamar.index',['data_kamar' => $data_kamar]);
    }

    public function create(Request $request)
    {
        \App\kamar::create($request->all()); 
        return redirect('/kamar')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $kamar = \App\kamar::find($id);
        return view('/kamar/edit',['kamar' => $kamar]);
    }

    public function update(Request $request,$id)
    {
        $kamar = \App\kamar::find($id);
        $kamar->update($request->all());
        return redirect('/kamar')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $kamar = \App\kamar::find($id);
        $kamar->delete();
        return redirect('/kamar')->with('sukses','Data berhasil dihapus');
    }

}

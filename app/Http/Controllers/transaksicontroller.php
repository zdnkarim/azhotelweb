<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transaksicontroller extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_transaksi = \App\transaksi::where('nomor_transaksi','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_transaksi = \App\transaksi::all();
        }
        return view('transaksi.index',['data_transaksi' => $data_transaksi]);
    }

    public function create(Request $request)
    {
        \App\transaksi::create($request->all()); 
        return redirect('/transaksi')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $transaksi = \App\transaksi::find($id);
        return view('/transaksi/edit',['transaksi' => $transaksi]);
    }

    public function update(Request $request,$id)
    {
        $transaksi = \App\transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $transaksi = \App\transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi')->with('sukses','Data berhasil dihapus');
    }
}

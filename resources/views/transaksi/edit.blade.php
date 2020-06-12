@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit data transaksi</h3>
								</div>
								<div class="panel-body">
                <form action="/transaksi/{{$transaksi->id}}/update" method="POST">
            {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleInputPassword1">ID</label>
                    <input name="id_transaksi" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID">
                </div>
                
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Kamar</label>
                    <input name="jumlah_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                    
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Masuk</label>
                  <input name="tanggal_masuk" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Keluar</label>
                  <input name="tanggal_keluar" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                  
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Lama menginap</label>
                    <input name="lama_menginap" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lama menginap">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">harga total</label>
                    <input name="harga_total" type="text" class="form-control" id="exampleInputPassword1" placeholder="harga total">
                </div>

                
                      
            <button type="submit" class="btn btn-warning">Update</button>
                  </div>
                    
  </form>
								</div>
              </div>
              

            </div>
          </div>
        </div>
      </div>
    </div>
@stop

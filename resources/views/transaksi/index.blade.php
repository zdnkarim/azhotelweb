@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title">Data Transaksi</h1>
                  <div class="right">
                        <button class="w3-button w3-Large w3-yellow " data-toggle="modal" data-target="#exampleModal">Tambah Data Pegawai</i></button>
                  </div>
                  

								</div>
								<div class="panel-body">
									<table class="w3-table-all w3-hoverable">
										<thead>
											<tr class="w3-black">
                          <th>ID Transaksi</th>
                          <th>Jumlah Kamar</th>
                          <th>tanggal masuk</th>
                          <th>Tanggal Keluar</th>
                          <th>Lama menginap</th>
                          <th>harga_total</th>
                          <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                          @foreach($data_transaksi as $transaksi)
                              <tr>
                                  <td>{{$transaksi->id_transaksi}}</td>
                                  <td>{{$transaksi->jumlah_kamar}}</td>
                                  <td>{{$transaksi->tanggal_masuk}}</td>
                                  <td>{{$transaksi->tanggal_keluar}}</td>
                                  <td>{{$transaksi->lama_menginap}}</td>
                                  <td>{{$transaksi->harga_total}}</td>
                                  <td>
                                    <a href="/transaksi/{{$transaksi->id}}/edit" class="w3-button w3-Large w3-yellow">Edit</a>
                                    <a href="/transaksi/{{$transaksi->id}}/delete" class="w3-button w3-Large w3-red" onclick="return confirm('Yakin mau dihapus?')">Delete</a>

                                  </td>
                              </tr>
                              @endforeach
										</tbody>
									</table>
								</div>
							</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Tambah Data kamar</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/transaksi/create" method="POST">
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

          

          
 
      </div>
      <div class="modal-footer">
        <button type="button" class="w3-button w3-Large w3-red" data-dismiss="modal">Close</button>
        <button type="submit" class="w3-button w3-Large w3-yellow">Submit</button>
  </form>
      </div>
    </div>
  </div>
</div>
</div>

@stop

@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title">Data Pengunjung</h1>
                  <div class="right">
                        <button class="w3-button w3-Large w3-yellow " data-toggle="modal" data-target="#exampleModal"></i>Tambah Data Pengunjung</button>
                  </div>
                  

								</div>
								<div class="panel-body">
									<table  class="w3-table-all w3-hoverable">
										<thead>
											<tr class="w3-black">
                          <th>ID Pengunjung</th>
                          <th>Nama Pengunjung</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Nomor telpon</th>
                          <th>nomor KTP</th>
                          <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                          @foreach($data_pengunjung as $pengunjung)
                              <tr class="w3-hover-khaki">
                                  <td>{{$pengunjung->id_pengunjung}}</td>
                                  <td>{{$pengunjung->nama_pengunjung}}</td>
                                  <td>{{$pengunjung->alamat_pengunjung}}</td>
                                  <td>{{$pengunjung->jk_pengunjung}}</td>
                                  <td>{{$pengunjung->telpon_pengunjung}}</td>
                                  <td>{{$pengunjung->ktp_pengunjung}}</td>
                                  <td>
                                    <a href="/pengunjung/{{$pengunjung->id}}/edit" class="w3-button w3-Large w3-yellow">Edit</a>
                                    <a href="/pengunjung/{{$pengunjung->id}}/delete" class="w3-button w3-Large w3-red" onclick="return confirm('Yakin mau dihapus?')">Delete</a>

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
        <h2 class="modal-title" id="exampleModalLabel">Tambah Data Pengunjung</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/pengunjung/create" method="POST">
      {{csrf_field()}}
      
        <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input name="id_pengunjung" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID Pengunjung">
          </div>
          
      
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Pengunjung</label>
            <input name="nama_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pengunjung">
            
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat_pengunjung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Pengunjung">
            
          </div>

          <div class="form-group">
              <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
              <select name="jk_pengunjung" class="form-control" id="exampleFormControlSelect1">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
               
              </select>
            </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Nomor Telpon</label>
            <input name="telpon_pengunjung" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telpon">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Nomor KTP</label>
            <input name="ktp_pengunjung" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
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

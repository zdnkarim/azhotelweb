@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title">Data Pegawai</h1>
                  <div class="right">
                        <button class="w3-button w3-Large w3-yellow " data-toggle="modal" data-target="#exampleModal">Tambah Data Pegawai</i></button>
                  </div>
                  

								</div>
								<div class="panel-body">
									<table class="w3-table-all w3-hoverable">
										<thead>
											<tr class="w3-black">
                          <th>ID</th>
                          <th>NAMA</th>
                          <th>JENIS KELAMIN</th>
                          <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
                          @foreach($data_hotel as $pegawai)
                              <tr class="w3-hover-khaki">
                                  <td>{{$pegawai->id_karyawan}}</td>
                                  <td>{{$pegawai->nama_karyawan}}</td>
                                  <td>{{$pegawai->jenis_kelamin}}</td>
                                  <td>
                                    <a href="/hotel/{{$pegawai->id}}/edit" class="w3-button w3-Large w3-yellow">Edit</a>
                                    <a href="/hotel/{{$pegawai->id}}/delete" class="w3-button w3-Large w3-red" onclick="return confirm('Yakin mau dihapus?')">Delete</a>

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
        <h2 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/hotel/create" method="POST">
      {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama_karyawan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input name="id_karyawan" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID">
          </div>
          
          

          <div class="form-group">
              <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
               
              </select>
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

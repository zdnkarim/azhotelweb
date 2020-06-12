@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel">
								<div class="panel-heading">
                  <h1 class="panel-title">Data kamar</h1>
                  <div class="right">
                        <button class="w3-button w3-Large w3-yellow " data-toggle="modal" data-target="#exampleModal">Tambah Data Pegawai</i></button>
                  </div>
                  

								</div>
								<div class="panel-body">
									<table class="w3-table-all w3-hoverable">
										<thead>
											<tr class="w3-black">
                          <th>ID Kamar</th>
                          <th>Nama Kamar</th>
                          <th>Lantai Kamar</th>
                          <th>Status Kamar</th>
                          <th>Aksi </th>
											</tr>
										</thead>
										<tbody>
                          @foreach($data_kamar as $kamar)
                              <tr>
                                  <td>{{$kamar->id_kamar}}</td>
                                  <td>{{$kamar->nama_kamar}}</td>
                                  <td>{{$kamar->lantai_kamar}}</td>
                                  <td>{{$kamar->status_kamar}}</td>
                                  <td>
                                    <a href="/kamar/{{$kamar->id}}/edit" class="w3-button w3-Large w3-yellow">Edit</a>
                                    <a href="/kamar/{{$kamar->id}}/delete" class="w3-button w3-Large w3-red" onclick="return confirm('Yakin mau dihapus?')">Delete</a>

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
      <form action="/kamar/create" method="POST">
      {{csrf_field()}}
      
        <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input name="id_kamar" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID">
          </div>
          
      
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            
          </div>
          

          <div class="form-group">
            <label for="exampleInputPassword1">Lantai Kamar</label>
            <input name="lantai_kamar" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lantai kamar">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">status kamar</label>
            <input name="status_kamar" type="text" class="form-control" id="exampleInputPassword1" placeholder="Status Kamar">
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

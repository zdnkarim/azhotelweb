@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit data pengunjung</h3>
								</div>
								<div class="panel-body">
                <form action="/pengunjung/{{$pengunjung->id}}/update" method="POST">
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
               
              </select>
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

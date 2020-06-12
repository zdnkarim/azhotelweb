@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit data pegawai</h3>
								</div>
								<div class="panel-body">
                <form action="/hotel/{{$pegawai->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama_karyawan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pegawai->nama_karyawan}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ID</label>
                    <input name="id_karyawan" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID" value="{{$pegawai->id_karyawan}}">
                </div>
                

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($pegawai->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($pegawai->jenis_kelamin == 'P') selected @endif>Perempuan</option>

                        
               
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

@section('content1')


        <h1>Edit Data Pegawai</h1>
      @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
        @endif
<div class="row">
<div class="col-lg-12">
<form action="/hotel/{{$pegawai->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama_karyawan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pegawai->nama_karyawan}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ID</label>
                    <input name="id_karyawan" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID" value="{{$pegawai->id_karyawan}}">
                </div>
                

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($pegawai->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($pegawai->jenis_kelamin == 'P') selected @endif>Perempuan</option>

                        
               
              </select>
            </div>

          
 
      </div>
        <button type="submit" class="btn btn-warning">Update</button>
  </form>
  </div>

      </div>
    </div>
  </div>
</div>
</div>

    

</div>

@endsection
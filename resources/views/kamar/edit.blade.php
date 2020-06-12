@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit data kamar</h3>
								</div>
								<div class="panel-body">
                <form action="/kamar/{{$kamar->id}}/update" method="POST">
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
                    <input name="status kamar" type="text" class="form-control" id="exampleInputPassword1" placeholder="Status Kamar">
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

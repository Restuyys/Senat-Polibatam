@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">UBAH DATA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SP Senat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
          <form action="/ubahsp/{{$data->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Dokumen</label>
                <input type="" name="nama_dokumen" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$data->nama_dokumen}}">
              </div>
              <div class="mb-3">
                <input type="file" id="myFile" name="dokumen" placeholder="" value="{{$data->dokumen}}">
              </div>
              <button class="btn btn-success btn-sm">Ubah Dokumen</button>
            </div>
          </form>
</div>
        </div></div>
</div>
</div>
</div>
  @endsection
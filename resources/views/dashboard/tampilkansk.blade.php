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
              <li class="breadcrumb-item active">SK Senat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
          <form action="/ubahsk/{{$data->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Dokumen</label>
                <input type="" name="nama_sk" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$data->nama_sk}}">
              </div>
              <div class="mb-3">
                <input type="file" id="myFile" name="file" placeholder="" value="{{$data->file}}">
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
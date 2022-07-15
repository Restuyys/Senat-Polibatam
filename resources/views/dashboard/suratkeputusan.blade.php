@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SURAT KEPUTUSAN SENAT </h1>
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
  <div class="card">
    <div class="card-body">
  <a class="btn btn-success mb-2 btn-sm" href="/tambahsk" role="button">Tambah Data</a>
    <div class="row">
        <table class="table table-bordered aligned">
            <thead>
              <tr>
                <th  width="10px" scope="col">#</th>
                <th style="text-align:center" width="300px" scope="col">Nama Dokumen</th>
                <th style="text-align:center" width="300px" scope="col">Dokumen</th>
                <th style="text-align:center" width="200px" scope="col">Aksi</th>
               
              </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                  @foreach ($data as $index => $row)
                      
                <tr>
                  <th scope="row">{{$index + $data->firstItem()}}</th>
                  <td>{{$row->nama_sk}}</td>
                  <td>
                    <a href="{{asset('Surat_Keputusan/'.$row->file)}}" style="width:100px" alt="" class="marginauto"><p>{{$row->nama_sk}}</p></button></a>
                    </td>
                <td>
                  <a href="/tampilkansk/{{$row->id}}"  class="btn btn-warning btn-sm">Ubah</a>
                  <a href="/hapussk/{{$row->id}}" class="btn btn-danger btn-sm">Hapus</a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
         
    </div>
    </div></div></div></div>
</div>
</div>
  @endsection
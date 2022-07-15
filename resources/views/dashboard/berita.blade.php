@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DAFTAR BERITA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container">
  <div class="card">
    <div class="card-body">
  <a class="btn btn-success mb-2 btn-sm" href="/tambahberita" role="button">Tambah Data</a>
    <div class="row">
        <table class="table table-bordered aligned">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th style="text-align:center" width="200px" scope="col">Judul Berita</th>
                <th style="text-align:center" width="500px" scope="col">Isi Berita</th>
                <th style="text-align:center" width="100px" scope="col">Gambar</th>
                <th style="text-align:center" width="150px" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
                @foreach ($data as $index => $row)
                    
              <tr>
                <th scope="row">{{$index + $data->firstItem()}}</th>
                <td>{{$row->judul_berita}}</td>
                <td>{{$row->isi_berita}}</td>
                <td>
                <img src="{{asset('fotoberita/'.$row->gambar_berita)}}" style="width:100px" alt="" class="marginauto">
                </td>
                <td>
                 
                 
                  <a href="/tampilkanberita/{{$row->id}}"  class="btn btn-warning btn-sm">Ubah</a>
                  <a href="/hapusberita/{{$row->id}}" class="btn btn-danger btn-sm">Hapus</button>
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
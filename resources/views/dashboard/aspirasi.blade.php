@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA ASPIRASI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Aspirasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container">
  <div class="card">
    <div class="card-body">
    <a  class="btn btn-primary mb-2 btn-sm " href="cetakaspirasi">Cetak PDF</a>
    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal/Waktu</th>
                <th scope="col">Judul Aspirasi</th>
                <th scope="col">UK Tujuan</th>
                <th scope="col">Isi Aspirasi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
                @foreach ($data as $index => $row)
                    
              <tr>
                <th scope="row">{{$index + $data->firstItem()}}</th>
                <td>{{$row->created_at}}</td>
                <td>{{$row->judul_aspirasi}}</td>
                <td>{{$row->uk_tujuan}}</td>
                <td>{{$row->isi_aspirasi}}</td>
                <td>
                    <a href="/hapusaspirasi/{{$row->id}}" class="btn btn-danger">Hapus</button>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
    </div>
</div>
</div>
</div></div>
</div>
  @endsection
@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA ADMIN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container">
  <div class="card">
    <div class="card-body">
    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Admin</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
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
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->password}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
    </div>
</div>
  </div></div>
</div>
  @endsection
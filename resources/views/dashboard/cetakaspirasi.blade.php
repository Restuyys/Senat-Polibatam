<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/1.css">
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
    <div class="container">
    <div class="from-group">
        <p class="text-center fw-bold fs-3">Laporan Data Aspirasi</p>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal/Waktu</th>
                <th scope="col">Judul Aspirasi</th>
                <th scope="col">UK Tujuan</th>
                <th scope="col">Isi Aspirasi</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($data as $row)
                    
              <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->created_at}}</td>
                <td>{{$row->judul_aspirasi}}</td>
                <td>{{$row->uk_tujuan}}</td>
                <td>{{$row->isi_aspirasi}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    </div>
   
  
</body>
</html>
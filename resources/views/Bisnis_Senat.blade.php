<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/senatlogo1.png" rel="shortcut icon">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Anek+Latin&display=swap');
        .navbar-inverse {
          background-color: #0A375B;
            font-size: 13px;
            font-variant: initial;
        }

        .jumbotron {
            background:#fff;
            background-attachment: scroll;
            color: white !important;
            height: 100vh;
            background-size: cover;
            padding: 7rem 0;
        }
        /* BUTTON STYLE HERE */
        .title {
            margin-top: 15vh;
            text-align: left;
        }

        .text_margin {
            width: 70vw;
            margin: 0 auto;
        }

        .footer-48201 {
            padding: 7rem 0;
            background-color: #0A375B;
            color: #777;
        }

        .footer-48201 .footer-site-logo {
            font-size: 1.5rem;
            color: #fff;
        }

        .footer-48201 .nav-links li {
            margin-bottom: 10px;
        }

        .footer-48201 .nav-links li a {
            color: gray;
        }

        .footer-48201 .nav-links li a:hover {
            color: #fff;
        }

        .footer-48201 .btn.btn-tertiary {
            background-color: #e42c64;
            color: #fff;
            border-radius: 30px;
            border: none;
            padding: 10px 20px;
        }

        .footer-48201 .social li {
            display: inline-block;
        }

        .footer-48201 .social li a {
            color: gray;
            padding: 7px;
        }

        .footer-48201 .social li a:hover {
            color: #fff;
        }

        .footer-48201 .copyright {
            border-top: 1px solid #404040;
        }
       .card-title{
        font-family: 'Oswald', sans-serif;
        
       }
       .card-text{
        font-family: 'Anek Latin', sans-serif;
       }
       .card-body{
        background:#fff;
       }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bisnis.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
    <!--NAVBAR-->

    @include('partials.navbar')
  <div class="jumbutron jumbutron-fluid">
  <div class="container">
    <div class="row justify-content-center">
      <p class=" fs-3 fw-bold mt-3 mb-3" style="font-weight:600; color:black; ">Proses Bisnis<strong class="fw-bold" style="font-weight:600; color:red; "> Senat</strong></p>
      @php
      $no = 1; 
      @endphp
        @foreach ($data as $index => $row)
      <div class="col-sm-4 mb-4">
       
        <div class="card border-primary text-center" style="max-width: 540px; height:180px;" >
          <div class="card-body">
            <h5 class="card-title">{{$row->nama_dokumen}}</h5>
            <p class="card-text">{{$row->isi}}</p>
            <a href="{{asset('Bisnis_Senat/'.$row->dokumen)}}" class="btn btn-danger btn-sm">Detail Prosedur</a>
          </div>
        </div>
      </div>
      @endforeach
      {{ $data->links() }}

     
    </div>
  </div>
  </div>
    <!--FOOTER-->
    @include('partials.footer')


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
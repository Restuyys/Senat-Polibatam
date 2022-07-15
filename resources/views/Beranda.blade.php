<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="img/senatlogo1.png" rel="shortcut icon">
    <style type="text/css">
    
        .navbar-inverse {
          background-color: #0A375B;
            font-size: 13px;
            font-variant: initial;
        }
        

        .berita {
            color: #f76a0c;
            background: transparent;
            border-style: solid;
            border-width: 0;
        }

        .caraousel-caption {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 0;
            top: 0;
            left: 50px;
            right: 50px;
            text-align: center;
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
       
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
    <!--NAVBAR-->

    @include('partials.navbar')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/CS3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block fst-italic">
                   
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/CS2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/CS1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    

    <!--beritaku-->
    <header>
        <p class="title fs-2 mt-2 fw-bold" style="font-weight:600; color:black; ">Berita <strong class="fw-bold" style="font-weight:600; color:red;"> Senat</strong></p>
        <link href="css/contoh.css" rel="stylesheet" type="text/css" />
      </header>

      <div class="band mb-2">
        @php
        $no = 1;
        @endphp
          @foreach ($data as $index => $row)
        <div class="item-2">
          <a href="/berita-open{{ $row->id }}" type="button" class="card">
           <div class="thumb" style="background-image:url({{asset('fotoberita/'.$row->gambar_berita)}});"></div>
            <article>
              <h1>{{$row->judul_berita}}</h1>
              <span>Senat Polibatam</span>
            </article>
          </a>
        </div>

        
        @endforeach
       
      
          </div></div></div>
      @include('partials.footer')
    


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>
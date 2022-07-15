<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/senatlogo1.png" rel="shortcut icon">
    <style type="text/css">
        .navbar-inverse {
            background-color: #0A375B;
            font-size: 13px;
            font-variant: initial;
        }
        .jumbotron {
            background:#fff;
            background-attachment: scroll;
            color: white !important;
         
            background-size: cover; 
        }
        .jumbotron1 {
            background:#ffffff;
            background-attachment: scroll;
            color: white !important;
         
            background-size: cover; 
        }
        .section {
            padding: 60px 0;
        }

        .section-bg {
            background-color: #f8fcf9;
        }

        .section-title {
            text-align: center;
            padding-bottom: 20px;
        }

        .section-title h2 {
            font-size: 25px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            color: #ddd;
        }

        .section-title p {
            margin-bottom: 0;
            font-size: 14px;
            color: #919191;
        }

        

        img.tengah {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 800px;
            margin-bottom: 35px;
        }

        .bagan {
            padding: 3rem 0;
        }

        .footer-48201 {
            padding: 7rem 0;
            background-color: rgb(12, 60, 99);
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
    <link href="css/anggota.css" rel="stylesheet" type="text/css" />
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
   <!--NAVBAR-->
   @include('partials.navbar')
   <!---->
    <!-- Struktur organisasi-->
     <!-- Struktur organisasi-->
     <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
            <p class="text-center fs-3 fw-bold mt-4 mb-4" style="font-weight:600; color:black; ">Struktur Organ Senat <strong class="fw-bold" style="font-weight:600; color:red; ">Politeknik Negeri Batam</strong></p>
              <img class="tengah" src="img/struktursenat.svg" />
              </div>
              <div class="col-8"></div>
            </div>
          </div>
      </div>
    </div>

    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
            <div class="row">
            <p class="text-center fs-3 fw-bold mt-4 " style="font-weight:600; color:black; ">Struktur Organ Senat<strong class="fw-bold" style="font-weight:600; color:red; "> Politeknik Negeri Batam</strong></p>
            <p class="text-center fs-5 fw-bold mb-4" style="font-weight:600; color:black; ">Periode 2020-2024<strong class="fw-bold" style="font-weight:600; color:red; "> </strong></p>
            <img class="tengah" src="img/sorganisasi.svg" />
              </div>
              <div class="col-8"></div>
            </div>
          </div>
      </div>
    </div>
    <!--ANGGOT SENAT-->
   
   

    <!--FOOTER-->
    @include('partials.footer')

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
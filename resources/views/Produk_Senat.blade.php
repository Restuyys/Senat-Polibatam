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

        .jumbotron1 {
            background: url("images/produk.png");
            background-attachment: scroll;
            color: white !important;
            height: 100vh;
            background-size: cover;
            padding: 3rem 0;
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
    <link rel="stylesheet" href="css/1.css">
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
    <!--NAVBAR-->
    @include('partials.navbar')
    <!---->
    <!--PRODUK SENAT-->
    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
            <p class="title fs-2 fw-bold" style="font-weight:600; color:black; ">Produk <strong class="fw-bold" style="font-weight:600; color:red;">Senat</strong></p>
            <p class="fs-5" style="color: black;">Senat Politeknik Negeri Batam memiliki 3 produk yaitu, Peraturan Senat,
                Surat Keputusan Senat , dan Surat Pertimbangan Senat.</p><br>
                <a href="/produksenatopen" type="button" class="btn btn-danger btn-sm rounded-pill">Peraturan Senat</a>
                <a href="/sksenatopen" type="button" class="btn btn-danger btn-sm rounded-pill">Surat Keputusan</a>
                <a href="/spsenatopen" type="button" class="btn btn-danger btn-sm rounded-pill">Surat Pertimbangan</a>
        </div>
    </div>
    <!--FOOTER-->
    @include('partials.footer')


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
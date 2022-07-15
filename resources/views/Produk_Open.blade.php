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
            background-color: #fff;
            height: 100vh;
            background-size: cover;  
        }

        .jumbotron1.text-decoration-underline.a {
            color: red;
        }

        /* BUTTON STYLE HERE */
        .title {
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
    
    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
            <h1 class="title fs-2 mt-2" style="font-weight:600; color:black; ">Peraturan <strong style="font-weight:600; color:red;">Senat</strong></h1><br>
            <div class="row" style="margin-left: 1px">
                <table class="table table-borderless table-sm">
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                          @foreach ($data as $index => $row)
                              
                        <tr>
                          
                          <td>
                            <a href="{{asset('Peraturan_Senat/'.$row->dokumen)}}" style="width:100px" alt="" class="marginauto"><p>{{$row->nama_dokumen}}</p></button></a>
                            </td>
        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $data->links() }}
                 
            </div>
            
            
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
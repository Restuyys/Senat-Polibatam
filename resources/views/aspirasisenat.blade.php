<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Anek+Latin&display=swap');
        .navbar-inverse {
            background-color: #0A375B;
            font-size: 13px;
            font-variant: initial;
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
       .row{
        font-family: 'Anek Latin', sans-serif;
       }
      
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="aspirasi/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="aspirasi/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/aspirasi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
    <!--NAVBAR-->
    @include('partials.navbar')
    <!--FORM ASPIRASI-->

    <div class="content">
    
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              
    
              <div class="row justify-content-center">
                <div class="col-md-6">
                  
                  <h3 class="heading">Sampaikan Aspirasi Anda!</h3>
                  <p>Mari sampaikan aspirasi Anda melalui Senat Politeknik Negeri Batam.</p>
    
                  <p><img src="images/aspirasii.png" alt="Image" class="img-fluid " width="500px" height="500px" ></p>
    
    
                </div>
                <div class="col-md-6">
                  
                  <form action="/kirimaspirasi" method="post" >
                     @csrf
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="judul_aspirasi" id="judul_aspirasi" placeholder="Judul Aspirasi" required autofocus>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="uk_tujuan" id="uk_tujuan" placeholder="Unit Kerja Tujuan" required autofocus>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                        *Unit Kerja Tujuan berupa, Direktur, Pembantu Direktur I, Pembantu Direktur II, dan Pembantu Direktur III.
                        </small>
                          
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="isi_aspirasi" id="isi_aspirasi" cols="30" rows="7" placeholder="Isi Aspirasi" required autofocus></textarea>
                      </div>
                    </div>  
                    <div class="row">
                        <div class="col-12">
                          <input type="submit" value="Kirim Aspirasi" class="btn btn-primary rounded-0 py-2 px-4 btn-sm">
                        <span class="submitting"></span>
                        </div>
                      </div>
                    </form>
      
    
                  <div id="form-message-warning mt-4"></div> 
                  <div id="form-message-success">
                    Your message was sent, thank you!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    
    <!--FOOTER-->
    @include('partials.footer')


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     
    
    <script src="aspirasi/js/jquery-3.3.1.min.js"></script>
    <script src="aspirasi/js/popper.min.js"></script>
    <script src="aspirasi/js/bootstrap.min.js"></script>
    <script src="aspirasi/js/jquery.validate.min.js"></script>
    <script src="aspirasi/js/main.js"></script>
</body>


</html>
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
     @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500&display=swap');
        .navbar-inverse {
            background-color: #0A375B;
            font-size: 13px;
            font-variant: initial;
        }
        ..sambutanbudi {
            background: url("img/bg5.svg");
            background-attachment: scroll;
            color: white !important;
            height: 100vh;
            background-size: cover;        
        }
        .jumbotron2 {
            background:#fff;
            background-attachment: scroll;
            color: white !important;
           
            background-size: cover;
            padding-top: 10px;
           
        }
        .tugasdanwewenang {
            background:url("img/bgbawah.svg");
            background-attachment: scroll;
            color: white !important;
           
            background-size: cover;
            position: relative;
        }
      

        .py-2 {
            padding: 7rem 0;
            background-color: #fff;
            color: black;
            font-size: 14px;
        }
        .footer-48201 {
            padding: 7rem 0;
            background-color: #0A375B;
            color: #777;
            background-size: cover;
            height: 100%;
            
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
        .column {
            float: left; /* Should be removed. Only for demonstration */
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .responsive {
            max-width: 100%;
            height: auto;
        }
        .text{
            padding-top: 10px; 
            font-family: 'Barlow Condensed', sans-serif;
        }
        .card-title{
        font-family: 'Oswald', sans-serif;
        color: black;
        
       }
       .card-text{
        font-family: 'Anek Latin', sans-serif;
        color: black;
       }
       .tugas{
        margin-bottom: 5px;
       }
       .card-body{
        background: #fdfeff;
       }
       .modal{
        font-family: 'Barlow Condensed', sans-serif;
       }
       .wewenang{
        font-family: 'Barlow Condensed', sans-serif;
        color: black;
       }
      
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Senat Politeknik Negeri Batam</title>
</head>

<body>
   <!--NAVBAR-->
   @include('partials.navbar')
   <!---->

    <!-- Tentang Senat-->

    <!---->
    <!-- Sambutan Senat-->
   
    <div class="jumbotron2 jumbotron-fluid">
        <div class="sambutanbudi container">
            <div class="row justify-content-center">
                <div class="column col-md-4 float-right-sm">
                <p class="title fs-2 fw-bold" style="font-weight:600; color:black;  font-family: 'Barlow Condensed', sans-serif;">Sambutan<strong class="fw-bold" style="font-weight:600; color:red;"> Ketua Senat</strong></p>
                <img src="img/budii.png" alt="" width="350px" height="400px" class="mx-auto">
                </div>
                <div class="column col-md-8 float-right-sm">
                    <p class="text fs-5 mt-5" style="font-size:5vw; color: black">Senat Akademik Politeknik Negeri Batam (Senat Polibatam) adalah salah satu organ Polibatam, disamping Direktur dan Dewan Penyantun. Hubungan antar organ Polibatam dilandasi oleh semangat kebersamaan dengan saling mendukung satu sama lain untuk kemajuan dan kepentingan Polibatam. Senat Polibatam seperti yang tercantum dalam Statuta Politeknik Negeri Batam merupakan organ yang mempunyai tugas dan wewenang dalam penetapan kebijakan, norma, dan kode etik akademik, pengawasan, serta pemberian pertimbangan di bidang akademik.</p>
                    <p class="text fs-5 " style="font-size:5vw; color: black">Keanggotaan Senat Polibatam sebagai mana diatur oleh Statuta Polibatam berjumlah 17 orang terdiri dari 5 orang Ex-Officio (Direktur, 3 Pembantu Direktur dan Ketua P3M) dan 12 wakil Jurusan (setiap Jururan diwakili 3 orang dosen).</p>
                    <p class="fs-6 fw-bold" style="color: black;  font-family: 'Barlow Condensed', sans-serif;">- Dr. Budi Sugandi, S.T., M.Eng. </p>
                    <a href="" class="btn  btn-danger mt-2 rounded-pill" >Selengkapnya</a>
                </div>
            </div>
        </div>

     <!---->
     
     <!-- Tentang Senat-->  
        <div class="tugasdanwewenang container mt-4 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="tugas fs-2 fw-bold " style="font-weight:600; color:black;  font-family: 'Barlow Condensed', sans-serif;">Tugas &<strong class="fw-bold" style="font-weight:600; color:red; "> Wewenang Senat</strong></p>
                </div>
                <div class="col-md-4">
                </div>
              </div>
              <div class="row">
                <p class="wewenang fs-5" style="color: black;">Senat merupakan organ yang menjalankan fungsi penetapan 
                    dan pertimbangan pelaksanaan kebijakan akademik.Senat dipimpin oleh seorang ketua dan dibantu seorang 
                    sekretaris.Anggota Senat terdiri atas, 3 (tiga) wakil Dosen dari setiap Jurusan, Direktur, 3 (tiga) Pembantu Direktur, danKepala Pusat Penelitian dan Pengabdian kepada 
                    Masyarakat. Anggota Senat yang berasal dari wakil Dosen dari setiap 
                    Jurusan, dipilih dari dan oleh Dosen pada masing-masing Jurusan. Senat dalam melaksanakan tugasnya dapat membentuk 
                    komisi, badan pekerja, dan/atau panitia kerja. Dalam Senat Politeknik Negeri Batam Senat terdiri dari 3 Komisi, yaitu Komisi I, Komisi I, dan Komisi II. Adapun tugas dan wewenang Komisi Senat Politeknik Negeri Batam adalah sebagai berikut;</p>
              </div>
            <div class="row justify-content-center">
                    <div class="col-md-4 mb-2 mt-2">
                      <div class="card border-primary text-center" style="max-width: 540px; height:180px;">
                        <div class="card-body">
                          <h5 class="card-title">KOMISI I</h5>
                          <p class="card-text" style="margin-bottom: 40px;">Pendidikan dan Pengajaran</p>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">Tugas dan Wewenang</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-2">
                      <div class="card border-primary text-center" style="max-width: 540px; height:180px;">
                        <div class="card-body">
                          <h5 class="card-title">KOMISI II</h5>
                          <p class="card-text">Riset, Pengabdian Masyarakat, dan Kerja Sama Akademik.</p>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal1">Tugas dan Wewenang</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-2">
                      <div class="card border-primary text-center" style="max-width: 540px; height:180px;">
                        <div class="card-body">
                          <h5 class="card-title" >KOMISI III</h5>
                          <p class="card-text"style="margin-bottom: 40px;">Sumberdaya Akademik</p>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal2">Tugas dan Wewenang</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
      </div>
    </div>

    <!-- The Modal Komisi 1 -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tugas dan Wewenang Komisi I</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <p class="lh-base fs-5">-Penetapan kebijakan akademik;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan penjaminan mutu perguruan tinggi paling sedikit mengacu pada standar nasional pendidikan tinggi;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan kebebasan akademik, kebebasan mimbar akademik, dan otonomi keilmuan;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan proses pembelajaran;</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan dan usul perbaikan proses pembelajaran;</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan kepada pemimpin perguruan tinggi dalam pembukaan dan penutupan program studi.</p>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        </div>
  
      </div>
    </div>
  </div>
  <!-- The Modal Komisi 2 -->
<div class="modal" id="myModal1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tugas dan Wewenang Komisi II</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan penelitian;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan pengabdian kepada masyarakat.</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan dan usul perbaikan proses penelitian kepada pimpinan perguruan tinggi;</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan dan usul perbaikan proses pengabdian masyarakat kepada pimpinan perguruan tinggi;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan kerjasama akademik.</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan terhadap pelaksanaan kerjasama akademik.</p>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        </div>
  
      </div>
    </div>
  </div>
  <!-- The Modal Komisi 3 -->
<div class="modal" id="myModal2">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tugas dan Wewenang Komisi III</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan kebijakan penilaian kinerja dosen</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan terhadap pemberian atau pencabutan gelar/jabatan dan penghargaan akademik</p>
            <p class="lh-base fs-5">-Pemberian pertimbangan kepada pemimpin perguruan tinggi dalam pengusulan profesor.</p>
            <p class="lh-base fs-5">-Penetapan norma dan kode etik akademik.</p>
            <p class="lh-base fs-5">-Pengawasan terhadap penerapan norma akademik dan kode etik sivitas akademika;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap penerapan ketentuan akademik;</p>
            <p class="lh-base fs-5">-Pengawasan terhadap pelaksanaan tata tertib akademik;</p>
            <p class="lh-base fs-5">-Pemberian Pertimbangan rekomendasi penjatuhan sanksi terhadap pelanggaran norma, etika, dan peraturan akademik oleh sivitas akademika kepada pemimpin perguruan tinggi.</p>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        </div>
  
      </div>
    </div>
  </div>
    
    <!---->


    
  
    <!--FOOTER-->
    @include('partials.footer')


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
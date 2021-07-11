<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asset/style.css">

    <title>SIPARKA</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container-fluid">
        <a class="atas navbar-brand" href="index.php"><img src="asset/images/Logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse mr-3" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="admin/login.php" class="btn btn-outline-success mr-3">Masuk Admin</a>
                <a href="login.php" class="btn btn-outline-success mr-3">Masuk Mahasiswa</a>
                <a href="daftar.php" class="btn btn-outline-primary">Daftar</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>
   <br>
    <!-- Akhir Navbar -->

    <!-- Banner -->

    <div class="container text-center">
      <br>
       <img src="asset/images/banner.png">
    </div>
      <br>
    <!-- Akhir Banner -->

    <!-- Carousel -->
    <section>
    <div class="container ">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel" data-interval="10000">
          <div class="carousel-inner w-100" role="listbox" data-interval="10000">
            <div class="carousel-item active" data-interval="10000">
              <div class="col-lg-4 col-md-6" data-interval="10000">
                <img class="img-fluid" src="asset/images/1.png">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6" data-interval="10000">
                <img class="img-fluid" src="asset/images/2.png">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6" data-interval="10000">
                <img class="img-fluid" src="asset/images/3.png">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6" data-interval="10000">
                <img class="img-fluid" src="asset/images/1.png">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6" data-interval="10000">
                <img class="img-fluid" src="asset/images/2.png">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6" data-interval="10000">
                <img class="img-fluid" src="asset/images/3.png">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    </section>
    <br>
    <!-- Akhir Carousel -->

    <!-- Syarat dan Ketentuan -->
    <section class="syarat" id="syarat">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                   <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                   <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                 </svg> Syarat dan Ketentuan
               </a>
            </li>

            <li class="nav-item" role="presentation">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 16 16">
                   <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"/>
                 </svg> Alur Peminjaman
               </a>
            </li>

            <li class="nav-item" role="presentation">
               <a class="nav-link" id="peminjaman-tab" data-toggle="tab" href="#peminjaman" role="tab" aria-controls="profile" aria-selected="false">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg> Jadwal Peminjaman</i>
              </a>

            </li>


            <li class="nav-item" role="presentation">
               <a class="nav-link" id="panduan-tab" data-toggle="tab" href="#panduan" role="tab" aria-controls="profile" aria-selected="false">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.3881.009.94z"/>
                  </svg> Panduan
               </a>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <ol class="bg-white"><br>
                    <li>Peminjaman wajib mengikuti prosedur peminjaman pada website siparka;</li><br>
                    <li>Memiliki kartu identitas seperti KTP, KTM, atau Kartu tanda pengenal pegawai untuk melakukan registrasi;</li><br>
                    <li>Usahakan peminjaman dilakukan minimal 7 hari atau 1 (Satu) minggu sebelum tanggal kegiatan;</li><br>
                    <li>Proses verifikasi peminjaman paling lama 3 hari, lebih dari 3 hari hubungi petugas kasubbag umum dan perlengkapan;</li><br>
                    <li>Apabila peminjaman berhasil kemudian tidak dilaksanakan, pengguna diharapkan memberi konfirmasi pembatalan;</li><br>
                    <li>Jika point 5 tidak dilakukan maka akan di berikan teguran dan sanksi.</li><br><br>
                    <div  class="alur container text-center" >
                      <a href="http://www.freepik.com"><img src="asset/images/Alur.png" width="900"></a>
                      <p><br><br></p>
                    </div>
                </ol>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ol class="bg-white"><br>
                    <li>Login pada aplikasi website SIPARKA (Sistem Informasi Peminjaman Ruangan FKIP UNTIRTA);</li><br>
                    <li>Peminjam mengajukan dan mengisi form peminjaman;</li><br>
                    <li>Selanjutnya menunggu verifikasi form pengajuan peminjaman oleh petugas kasubbag umum dan perlengkapan;</li><br>
                    <li>Setelah di verifikasi, peminjam menyerahkan bukti surat peminjaman lalu bukti tersebut di tanda tangani serta di stempel basah oleh petugas kasubbag umum dan perlengkapan;</li>
                    <br>
                    <li>Apabila surat sudah di beri tanda tangan dan stempel basah, maka peminjam berhak mendapatkan akses peminjaman yang di kelola oleh penanggung jawab ruangan atau petugas keamanan;</li><br><br>
                    <div  class="alur container text-center" >
                      <a href="http://www.freepik.com"><img src="asset/images/Alur.png" width="900"></a>
                      <p><br><br></p>
                    </div>
                </ol>
            </div>

            <div class="tab-pane fade" id="peminjaman" role="tabpanel" aria-labelledby="peminjaman-tab">
                <div style="padding: 30px;background-color: white;">
                  <?php include 'jadwal-peminjaman.php' ?>

                </div>
            </div>

            <div class="tab-pane fade" id="panduan" role="tabpanel" aria-labelledby="panduan-tab">
                <ol class="bg-white"><br>
                    <li>Login pada aplikasi website SIPARKA (Sistem Informasi Peminjaman Ruangan FKIP UNTIRTA);</li><br>
                    <li>Peminjam mengajukan dan mengisi form peminjaman;</li><br>
                    <li>Selanjutnya menunggu verifikasi form pengajuan peminjaman oleh petugas kasubbag umum dan perlengkapan;</li><br>
                    <li>Setelah di verifikasi, peminjam menyerahkan bukti surat peminjaman lalu bukti tersebut di tanda tangani serta di stempel basah oleh petugas kasubbag umum dan perlengkapan;</li>
                    <br>
                    <li>Apabila surat sudah di beri tanda tangan dan stempel basah, maka peminjam berhak mendapatkan akses peminjaman yang di kelola oleh penanggung jawab ruangan atau petugas keamanan;</li><br><br>
                    <div  class="alur container text-center" >
                      <a href="http://www.freepik.com"><img src="asset/images/Alur.png" width="900"></a>
                      <p><br><br></p>
                    </div>
                </ol>
            </div>
        </div>

    </div>
    </section>
    <!-- Akhir Syarat dan ketetntuan -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <p>&copy; copyright 2021 | built by. <a href="http://instagram. com/donioktaviana">Doni Oktaviana</a>.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="asset/js/carousel.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

 <!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->

  </body>
</html>

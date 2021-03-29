<?php
include '../koneksi.php';

$nama_ruangan = $_POST['nama_ruangan'];
$kode_ruangan = $_POST['kode_ruangan'];
$kondisi = $_POST['kondisi'];
$photo2 = $_POST['photo2'];
$photo3 = $_POST['photo3'];

// photo1

  if ($_POST['upload']) {
      $ekstensi_diperbolehkan = array('jpg','png','jpeg');
      $photo1 = $_FILES['photo1']['name'];
      $x = explode('.', $photo1);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['photo1']['size'];
      $file_tmp = $_FILES['photo1']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 2000000) {
              move_uploaded_file($file_tmp, '../img/ruang/' .'ruangan-'. $kode_ruangan . '-photo1.png');
          } else {
              echo 'Photo 1';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File ruangan tidak .jpg ';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
  }

  $photo1_db = "ruangan-$kode_ruangan-photo1.png";


//pengecekan kondisi photo2 di upload atau tidak

      // photo2
      if ($_POST['upload']) {
          $ekstensi_diperbolehkan = array('jpg','png','jpeg');
          $photo2 = $_FILES['photo2']['name'];
          $x = explode('.', $photo2);
          $ekstensi = strtolower(end($x));
          $ukuran    = $_FILES['photo2']['size'];
          $file_tmp = $_FILES['photo2']['tmp_name'];
          if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
              if ($ukuran < 2000000) {
                move_uploaded_file($file_tmp, '../img/ruang/' .'ruangan-'. $kode_ruangan . '-photo2.png');
              } else {
                  echo 'Photo 2';
                  echo 'UKURAN FILE TERLALU BESAR';
                  exit;
              }
          } else {
              echo 'File ruangan tidak .jpg ';
              echo "<br>";
              echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
              // header("location:gagal-upload.php");
              exit;
          }
      }

      $photo2_db = "ruangan-$kode_ruangan-photo2.png";



  // photo2
  if ($_POST['upload']) {
      $ekstensi_diperbolehkan = array('jpg','png','jpeg');
      $photo3 = $_FILES['photo3']['name'];
      $x = explode('.', $photo3);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['photo3']['size'];
      $file_tmp = $_FILES['photo3']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 2000000) {
            move_uploaded_file($file_tmp, '../img/ruang/' .'ruangan-'. $kode_ruangan . '-photo3.png');
          } else {
              echo 'Photo 2';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File ruangan tidak .jpg ';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
  }

  $photo3_db = "ruangan-$kode_ruangan-photo3.png";


$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_ruangan
  Values('','$nama_ruangan','$kode_ruangan','$kondisi',
    '$photo1_db',
    '$photo2_db',
    '$photo3_db')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:ruangan.php?pesan=ruangan_tmbh");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}

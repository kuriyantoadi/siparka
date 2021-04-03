<?php
include '../koneksi.php';

$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];
$kode_ruangan = $_POST['kode_ruangan'];
$kondisi = $_POST['kondisi'];
$des_ruangan = $_POST['des_ruangan'];
// $photo_ruangan = $_POST['photo_ruangan'];


// photo Ruangan
// $photo_ruangan = $_POST['photo_ruangan'];
if (!empty($_POST['photo_ruangan'])){
  echo "photo ruangan kosong";
}else{

  echo "photo ruangan ada";

  if ($_POST['upload']) {
      $ekstensi_diperbolehkan = array('jpg','png','jpeg');
      $photo_ruangan = $_FILES['photo_ruangan']['name'];
      $x = explode('.', $photo_ruangan);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['photo_ruangan']['size'];
      $file_tmp = $_FILES['photo_ruangan']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 2000000) {
              move_uploaded_file($file_tmp, '../img/ruang/' .'ruangan-'.$kode_ruangan.'.png');
          } else {
              echo 'Photo 1';
              echo 'UKURAN FILE TERLALU BESAR';
              // exit;
          }
      } else {
          echo 'File ruangan tidak .jpg ';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          // exit;
      }
  }
}


$edit_ruangan = mysqli_query($koneksi, "UPDATE tb_ruangan SET
         nama_ruangan='$nama_ruangan',
         -- kode_ruangan='$kode_ruangan',
         des_ruangan='$des_ruangan',
         photo_ruangan='ruangan-$kode_ruangan.png',
         kondisi='$kondisi'
        where id_ruangan='$id_ruangan'
        ");



if ($edit_ruangan) {
    // echo "tambah berhasil";
    header("location:ruangan.php?pesan=ruangan_edit");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}
?>

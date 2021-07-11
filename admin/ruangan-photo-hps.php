<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
ob_start();
session_start();
if ($_SESSION['status'] != "aihooCi2") {
    header("location:login.php?pesan=belum_login");
}
    $id_ruangan = $_GET['id_ruangan']; //1
    $photo_ruangan = $_GET['photo_ruangan'];
    // $kode_ruangan = $_GET['kode_ruangan'];

    unlink("../img/ruang/$photo_ruangan");

    // menghapus data dari database
    $photo_hps = mysqli_query($koneksi, "UPDATE tb_ruangan SET
            photo_ruangan=''
            where id_ruangan='$id_ruangan'
            ");

    // mengalihkan halaman kembali ke index.php
    if($photo_hps) {
      // echo "hapus berhasil";
      header("location:ruangan-edit.php?pesan=ruangan_photo_hps&id_ruangan=$id_ruangan");
    }else{
      echo "hapus gagal";
      // header("location:mhs.php?pesan=hapus-gagal");
    }

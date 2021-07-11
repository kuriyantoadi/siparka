<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
ob_start();
session_start();
if ($_SESSION['status'] != "aihooCi2") {
    header("location:login.php?pesan=belum_login");
}
    $id_ruangan = $_GET['id_ruangan'];
    $kode_ruangan = $_GET['kode_ruangan'];
    
    unlink("../img/ruang/ruangan-$kode_ruangan-photo1.png");
    unlink("../img/ruang/ruangan-$kode_ruangan-photo2.png");
    unlink("../img/ruang/ruangan-$kode_ruangan-photo3.png");

    // menghapus data dari database
    $cek_hapus = mysqli_query($koneksi, "delete from tb_ruangan where id_ruangan='$id_ruangan' ");

    // mengalihkan halaman kembali ke index.php
    if($cek_hapus) {
      // echo "hapus berhasil";
      header("location:ruangan.php?pesan=ruangan_hps");
    }else{
      echo "hapus gagal";
      // header("location:mhs.php?pesan=hapus-gagal");
    }

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
    $id_photo = $_GET['id_photo'];

    unlink("../img/ruang/ruangan-$id_photo-$nim_mhs.pdf");

    // menghapus data dari database
    $cek_hapus = mysqli_query($koneksi, "delete from tb_mahasiswa where nim_mhs='$nim_mhs' ");

    // mengalihkan halaman kembali ke index.php
    if($cek_hapus) {
      // echo "hapus berhasil";
      header("location:mhs.php?pesan=mhs_hapus");
    }else{
      echo "hapus gagal";
      // header("location:mhs.php?pesan=hapus-gagal");
    }

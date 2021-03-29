<?php

include '../koneksi.php';

$nim_mhs = $_GET['nim_mhs'];

$konfirmasi_ok = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET
        status='aktif'
        where nim_mhs='$nim_mhs'
        ");

if ($konfirmasi_ok) {
    // echo "tambah berhasil";
    header("location:mhs-lihat.php?pesan=mhs_aktif&nim_mhs=$nim_mhs");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

<?php

include '../koneksi.php';
$nim_mhs = $_GET['nim_mhs'];

$konfirmasi_tolak = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET
        status='tolak'
        where nim_mhs='$nim_mhs'
        ");

if ($konfirmasi_tolak) {
    // echo "tambah berhasil";
    header("location:mhs-lihat.php?pesan=mhs_tolak&nim_mhs=$nim_mhs");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

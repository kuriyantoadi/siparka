<?php

include '../koneksi.php';

$id_pinjam = $_GET['id_pinjam'];

$konfirmasi = mysqli_query($koneksi, "UPDATE tb_pinjam SET
        status_peminjaman='Diizinkan'
        where id_pinjam='$id_pinjam'
        ");

if ($konfirmasi) {
    // echo "tambah berhasil";
    header("location:peminjaman.php?pesan=peminjaman_diizinkan&id_pinjam=$id_pinjam");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

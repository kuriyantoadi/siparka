<?php

include 'koneksi.php';

$nim_mhs = $_POST['nim_mhs'];
$password = md5($_POST['password']);

$password_baru = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET
        password='$password'
        where nim_mhs='$nim_mhs'
        ");

if ($password_baru) {
    // echo "tambah berhasil";
    header("location:mhs-profil.php?pesan=password_baru&nim_mhs=$nim_mhs");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

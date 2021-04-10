<?php

include '../koneksi.php';

$id_user = $_POST['id_user'];
$password = md5($_POST['password']);

$password_baru = mysqli_query($koneksi, "UPDATE tb_user SET
        password='$password'
        where id_user='$id_user'
        ");

if ($password_baru) {
    // echo "tambah berhasil";
    header("location:profil.php?pesan=password_baru&id_user=$id_user");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

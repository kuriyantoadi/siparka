<?php

include '../koneksi.php';

$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$organisasi = $_POST['organisasi'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$edit_mhs = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET
         nama_mhs='$nama_mhs',
         organisasi='$organisasi',
         jurusan='$jurusan',
         email='$email',
         no_hp='$no_hp',
         alamat='$alamat'
        where nim_mhs='$nim_mhs'
        ");

if ($edit_mhs) {
    // echo "tambah berhasil";
    header("location:mhs-lihat.php?pesan=mhs_edit&nim_mhs=$nim_mhs");
} else {
    echo "Edit gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

<?php
include 'koneksi.php';

$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$organisasi = $_POST['organisasi'];
$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];

if ($password != $konfirmasi) {
  // echo "konfirmasi password salah";
  header("location:daftar.php?pesan=konfirmasi_salah");
  exit();
}

$data = mysqli_query($koneksi, "SELECT nim_mhs from tb_mahasiswa WHERE nim_mhs='$nim_mhs'");
$cek_nim = mysqli_fetch_array($data);

if($cek_nim){
  // echo "akun sudah terdaftar";
  header("location:daftar.php?pesan=akun_terdaftar");
  exit();
}

$enk_nim = md5($nim_mhs);
$enk = substr($enk_nim,6,10);

echo $enk;

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_mahasiswa
  Values('','$nim_mhs','$nama_mhs','$organisasi','$email',md5('$password'),'$enk','')");

if ($cek_tambah) {
    echo "tambah berhasil";
    // header("location:daftar.php?pesan=daftar-berhasil");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}

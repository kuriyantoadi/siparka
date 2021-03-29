<?php
include 'koneksi.php';

$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$organisasi = $_POST['organisasi'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];
$tgl = date('Y-m-d');


if ($_POST['upload']) {
    $ekstensi_diperbolehkan = array('pdf','pdf','pdf');
    // $waktu = date('d-m-Y');
    // $ktm_up = "ktm";
    $ktm = $_FILES['ktm']['name'];
    $x = explode('.', $ktm);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['ktm']['size'];
    $file_tmp = $_FILES['ktm']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1000000) {
            move_uploaded_file($file_tmp, 'img/ktm/' .'ktm-'. $nim_mhs . '.pdf');
        } else {
            echo 'ktm';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File ktm tidak .jpg';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}


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
  Values('','$nim_mhs','$nama_mhs','$organisasi','$jurusan','$email',md5('$password'),'$no_hp','$alamat','$tgl','ktm-$nim_mhs.pdf','$enk','Belum dikonfirmasi')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:bukti-registrasi.php?nim_mhs=$nim_mhs");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}

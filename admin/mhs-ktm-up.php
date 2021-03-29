<?php
include '../koneksi.php';

ob_start();
session_start();
if ($_SESSION['status'] != "aihooCi2") {
    header("location:login.php?pesan=belum_login");
}

$nim_mhs = $_POST['nim_mhs'];
unlink("../img/ktm/ktm-$nim_mhs.pdf");

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
            move_uploaded_file($file_tmp, '../img/ktm/' .'ktm-'. $nim_mhs . '.pdf');
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

if ($ktm) {
    // echo "tambah berhasil";
    header("location:mhs-lihat.php?pesan=ktm_ganti&nim_mhs=$nim_mhs");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}

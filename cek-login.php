<?php
// echo "salah php";
// mengaktifkan session php

session_start();
// echo "salah php session";

// menghubungkan dengan koneksi
include 'koneksi.php';
// echo "salah php inlucde";

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$nim_mhs = addslashes(trim($_POST['nim_mhs']));
// $nisn = $_POST['nisn'];
$password = md5($_POST['password']);
// echo "salah php";

// menyeleksi data admin dengan nisn dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tb_mahasiswa where nim_mhs='$nim_mhs' and password='$password'");
// $data = mysqli_query($koneksi, "select * from login where nisn='$nisn' ");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// echo "cek2";

if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['status']=="aktif") {
        $_SESSION['nim_mhs'] = $nim_mhs;
        $_SESSION['status'] = "aktif";
        // echo "cek";
        header("location:mhs_dash.php?nim_mhs=$nim_mhs");
    } else {
        // echo "salah1";
        header("location:login.php?pesan=belum_validasi");
    }
} else {
    // echo "salah2";
    header("location:login.php?pesan=belum_terdaftar");
}

<?php

include 'koneksi.php';

$id_pinjam = $_POST['id_pinjam'];
$kritik = $_POST['kritik'];
$saran = $_POST['saran'];

$pengajaun_selesai = mysqli_query($koneksi, "UPDATE tb_pinjam SET
        kritik='$kritik',
        saran='$saran',
        status_peminjaman='Selesai'
        where id_pinjam='$id_pinjam'
        ");

if ($pengajaun_selesai) {
    // echo "tambah berhasil";
    header("location:pengajuan.php?pesan=pinjam_kritik_saran&nim_mhs=$nim_mhs&id_pinjam=$id_pinjam");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}


 ?>

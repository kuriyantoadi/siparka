<?php
include 'koneksi.php';

$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$id_ruangan = $_POST['id_ruangan'];
$kode_ruangan = $_POST['kode_ruangan'];
$tgl_pengajuan = date('d-m-Y');
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$wkt_peminjaman = $_POST['wkt_peminjaman'];
$tgl_kembali = $_POST['tgl_kembali'];
$wkt_kembali = $_POST['wkt_kembali'];
$des_keg = $_POST['des_keg'];


if ($tgl_peminjaman > $tgl_kembali) {
  echo "Tanggal kembali dan Tanggal Pinjam tidak sesuai";
  echo "<br>";
  header("location:ruangan-pinjam.php?pesan=pinjam_error_tgl_salah&nim_mhs=$nim_mhs&id_ruangan=$id_ruangan");
  exit;
}

// tgl pengajuan => db => tgl peminjaman
$data1  = mysqli_query($koneksi, "SELECT * from tb_pinjam where (kode_ruangan=$kode_ruangan) and (tgl_peminjaman between '$tgl_peminjaman' and '$tgl_kembali')");
while ($d = mysqli_fetch_array($data1)) {
 $tgl_pnjm1 =  $d['tgl_kembali'];
}

if(!empty($tgl_pnjm1)){
  // echo "<br>";
  // echo "Data ada yang sama (A)";
  header("location:ruangan-pinjam.php?pesan=pinjam_tgl_sama_db&nim_mhs=$nim_mhs&id_ruangan=$id_ruangan");
  exit;
}

// tgl pengajuan => db => tgl kembali
$data2  = mysqli_query($koneksi, "SELECT * from tb_pinjam where (kode_ruangan=$kode_ruangan) and (tgl_kembali between '$tgl_peminjaman' and '$tgl_kembali')");
while ($d = mysqli_fetch_array($data2)) {
 $tgl_pnjm2 =  $d['tgl_kembali'];
}

if(!empty($tgl_pnjm2)){
  // echo "<br>";
  // echo "Data ada yang sama (B)";
  header("location:ruangan-pinjam.php?pesan=pinjam_tgl_sama_db&nim_mhs=$nim_mhs&id_ruangan=$id_ruangan");
  exit;
}


if ($_POST['upload']) {
    $ekstensi_diperbolehkan = array('jpg','jpeg','png');
    $surat_izin = $_FILES['surat_izin']['name'];
    $x = explode('.', $surat_izin);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['surat_izin']['size'];
    $file_tmp = $_FILES['surat_izin']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1000000) {
            move_uploaded_file($file_tmp, 'img/surat_izin/' .'surat_izin-'. $nim_mhs.'-' .$tgl_peminjaman. '.png');
        } else {
            echo 'surat_izin';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File surat_izin tidak jpg jpeg png';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}


$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_pinjam
  Values('',
    '$nim_mhs',
    '$kode_ruangan',
    '$tgl_pengajuan',
    '$tgl_peminjaman',
    '$wkt_peminjaman',
    '$tgl_kembali',
    '$tgl_kembali',
    '$des_keg',
    'surat_izin-$nim_mhs-$tgl_peminjaman.png',
    '',
    '',
    'Menunggu Konfirmasi')");

if ($cek_tambah) {
    echo "tambah berhasil";
    header("location:ruangan-pinjam.php?pesan=pinjam_tgl_sama_db&nim_mhs=$nim_mhs&id_ruangan=$id_ruangan");
} else {
    echo "tambah gagal";
    // header("location:daftar.php?pesan=daftar-gagal");
}

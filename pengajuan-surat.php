<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Surat Peminjaman</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">

    <center>
      <h3>SURAT BUKTI</h3>
      <h3>PEMINJAMAN RUANGAN</h3>
      <h3 style="margin-bottom: 30px">FKIP UNTIRTA</h3>
    </center>

    <p>Berikut informasi dan data peminjaman ruangan :</p>

    <table class="table table-bordered">
      <?php
      include('koneksi.php');
      $id_pinjam = $_GET['id_pinjam'];
      $nim_mhs = $_GET['nim_mhs'];
      $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
        tb_pinjam.id_pinjam=$id_pinjam and tb_pinjam.nim_mhs=$nim_mhs
        and tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs
        and tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
      while ($d = mysqli_fetch_array($data)) {
      ?>

      <tr>
        <td>Nama Peminjam</td>
        <td>: <?= $d['nama_mhs'] ?></td>
      </tr>
      <tr>
        <td>NIM Mahasiswa </td>
        <td>: <?= $d['nim_mhs'] ?></td>
      </tr>
      <tr>
        <td>No Telepon</td>
        <td>: <?= $d['no_hp'] ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>: <?= $d['email'] ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>: <?= $d['alamat'] ?></td>
      </tr>
      <tr>
        <td>Organisasi</td>
        <td>: <?= $d['organisasi'] ?></td>
      </tr>
    </table>
    <p>Dengan ini saya mengajukan surat bukti peminjaman ruangan untuk melakukan kegiatan di kampus,  dengan rincian peminjaman sebagai berikut:</p>
    <!-- <p>Dengan pengajuan Registrasi ini dibuat. Atas perhatiannya diucapkan terima kasih.</p> -->
    <table style="margin-top: 30px;">
      <tr>
        <td>Nama Kegiatan</td>
        <td>: <?= $d['des_keg']; ?></td>
      </tr>
      <tr>
        <td>Nama Ruangan</td>
        <td>: <?= $d['nama_ruangan'] ?></td>
      </tr>
      <tr>
        <td>Tanggal Peminjaman</td>
        <td>: <?= $d['tgl_peminjaman'] ?>, <?= $d['wkt_peminjaman'] ?> WIB</td>
      </tr>
      <tr>
        <td>Tanggal Pengembalian</td>
        <td>: <?= $d['tgl_kembali'] ?>, <?= $d['wkt_kembali'] ?> WIB</td>
      </tr>
    </table>
  <?php } ?>
  </div>
  <br>
<table>
  <tr>
    <td>
      <p>Dengan adanya surat bukti peminjaman ini dibuat agar digunakan dengan semestinya. Atas perhatiannya diucapkan terima kasih.</p>
    </td>
  </tr>
</table>
<table style="margin-top: 30px; margin-left: 450px">
  <tr>
    <td><center>Serang, <?= $d['tgl']; ?></td>
  </tr>
  <tr>
    <td style="padding-top: 70px"></td>
  </tr>
  <tr>
    <td><center>Petugas Kasubbag. Umum dan Perlengkapan</td>
  </tr>
</table>
  <script>
    window.print();
  </script>
</body>

</html>

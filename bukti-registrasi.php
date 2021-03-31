<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Bukti Registrasi</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <title>Login | Siparka</title>

  <!-- <link href="css/app.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">

    <center>
      <h3>BUKTI REGISTRASI</h3>
      <h3>SISTEM INFOMRASI PEMINJAMAN RUANGAN</h3>
      <h3 style="margin-bottom: 30px">FKIP UNTIRTA</h3>
    </center>

    <table class="table table-bordered">
      <?php
      include('koneksi.php');
      $nim_mhs = $_GET['nim_mhs'];
      $data = mysqli_query($koneksi, "SELECT * from tb_mahasiswa WHERE nim_mhs='$nim_mhs' ");
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <tr>
        <td>Saya yang bertanda tangan dibawah ini</td>
      </tr>

      <tr>
        <td>Nama </td>
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
    <p>Dengan ini saya mengajukan registrasi untuk melakukan peminjaman ruangan melalui website SIPARKA, dengan melampirkan :</p>
    <ul>
      <li>Kartu Tanda Mahasiswa (KTM)</li>
    </ul>
    <p>Dengan pengajuan Registrasi ini dibuat. Atas perhatiannya diucapkan terima kasih.</p>
    <table style="margin-top: 30px; margin-left: 500px">
      <tr>
        <td>Serang, <?= $d['tgl']; ?></td>
      </tr>
      <tr>
        <td style="padding-top: 70px"><u><?= $d['nama_mhs']; ?></u></td>
      </tr>
      <tr>
        <td>Pemohon</td>
      </tr>
    </table>
  <?php } ?>
  </div>
  <br>
<table>
  <tr>
    <td>
      Catatan : Verifikasi registrasi dilakukan di kasubbag umum dan perlengkapan
    </td>
  </tr>
</table>
  <script>
    window.print();
  </script>
</body>

</html>

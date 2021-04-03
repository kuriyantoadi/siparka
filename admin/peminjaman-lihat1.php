<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">


    <div class="row">
      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-body px-4">

            <h3 style="margin-bottom: 50px">
              <center>Lihat Pengajuan
            </h3>

              <table class="table table-bordered">
                <?php
                  include('../koneksi.php');
                  include('../alert.php');
                  $id_pinjam = $_GET['id_pinjam'];
                  $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where tb_pinjam.id_pinjam=$id_pinjam and tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
                  while ($d = mysqli_fetch_array($data)) {
                   ?>
                <div class="mb-3">
                  <br><img src="../img/ruang/<?= $d['photo_ruangan'] ?>" width="50%" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                </div>
                <tr>
                  <td>Nama Peminjam</td>
                  <td>: <?= $d['nama_mhs'] ?></td>
                </tr>
                <tr>
                  <td>NIM</td>
                  <td>: <?= $d['nim_mhs'] ?></td>
                </tr>
                <tr>
                  <td>Tanggal Transaksi</td>
                  <td>: <?= $d['tgl_pengajuan'] ?></td>
                </tr>
                <tr>
                  <td>Tanggal Peminjaman</td>
                  <td>: <?= $d['tgl_peminjaman'] ?></td>
                </tr>
                <tr>
                  <td>Tanggal Kembali</td>
                  <td>: <?= $d['tgl_kembali'] ?></td>
                </tr>
              </table>

              <?php } //tampil data mahasiswa ?>

          </div>
        </div>
      </div>
    </div>


  </div>
</main>

<?php include('footer.php') ?>

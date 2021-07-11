<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">
          <?php
          $kode_ruangan = $_GET['kode_ruangan'];
          $cek_ruangan = mysqli_query($koneksi, "SELECT * from tb_ruangan where kode_ruangan='$kode_ruangan' ");
          while ($lihat_ruangan = mysqli_fetch_array($cek_ruangan)) {
           ?>
            <h3 style="margin-bottom: 30px; text-align: center;">Riwayat Peminjaman Ruangan <?= $lihat_ruangan['nama_ruangan'] ?> </h3>
          <?php  } ?>

            <?php
            include('alert.php');
             ?>
            <table class="table table-bordered table-hover" id="example">
              <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Nama Peminjam
                </th>
                <th>
                  <center>Nama Ruangan
                </th>
                <th>
                  <center>Tanggal Pengajuan
                </th>
                <th>
                  <center>Tanggal Peminjaman
                </th>
                <th>
                  <center>Tanggal Kembali
                </th>
                <th>
                  <center>Status
                </th>
                <!-- <th>
                  <center>Pilihan
                </th> -->
              </tr>
            </thead>

            <?php
            $no=1;
            include('koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
              tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan and
              tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs and
              tb_pinjam.kode_ruangan='$kode_ruangan' ");
            while ($d = mysqli_fetch_array($data)) {
             ?>

              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $d['nama_mhs'] ?></td>
                <td><center><?= $d['nama_ruangan'] ?></td>
                <td><center><?= $d['tgl_pengajuan'] ?></td>
                <td><center><?= $d['tgl_peminjaman'] ?></td>
                <td><center><?= $d['tgl_kembali'] ?></td>
                <td><center>
                  <?php
                  if("Menunggu Konfirmasi" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-warning">Menunggu</span>

                  <?php }elseif("Tolak" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-danger">Tolak</span>

                  <?php }elseif("Diizinkan" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-success">Diizinkan</span>

                  <?php }elseif("Selesai" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-info">Selesai</span>


                  <?php } ?>
                </td>
                <!-- <td>
                  <center>
                  <a href="peminjaman-lihat.php?id_pinjam=<?= $d['id_pinjam'] ?>" class="btn btn-sm btn-info">Lihat</a>
                </td> -->
              </tr>
              <?php } ?>
            </table>

          </div>

        </div>
      </div>

    </div>

  </div>
</main>

<?php include('footer.php') ?>

<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">

            <h3 style="margin-bottom: 30px; text-align: center;">Data Peminjaman</h3>

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
                <th>
                  <center>Pilihan
                </th>
              </tr>
            </thead>

            <?php
            $no=1;
            include('koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan where tb_pinjam.nim_mhs=$nim_mhs and tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
            while ($d = mysqli_fetch_array($data)) {
             ?>

              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $d['nama_ruangan'] ?></td>
                <td><center><?= $d['tgl_pengajuan'] ?></td>
                <td><center><?= $d['tgl_peminjaman'] ?></td>
                <td><center><?= $d['tgl_kembali'] ?></td>
                <td><center>
                  <?php
                  if("Menunggu" ==  $d['status_peminjaman']){
                    ?>
                    <span class="badge badge-pill bg-secondary">Menunggu</span>
                  <?php }elseif("Tolak" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-danger">Ditolak</span>
                  <?php }elseif("Diizinkan" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-success">Diizinkan</span>
                  <?php }elseif("Selesai" ==  $d['status_peminjaman']){ ?>
                    <span class="badge badge-pill bg-info">Selesai</span>
                  <?php } ?>
                </td>
                <td>
                  <center>
                  <a href="pengajuan-riwayat.php?id_ruangan=<?= $d['id_ruangan'] ?>" class="btn btn-sm  btn-secondary">Riwayat</a>
                  <?php if ("Menunggu" !=  $d['status_peminjaman']) { ?>
                    <a href="pengajuan-lihat.php?id_pinjam=<?= $d['id_pinjam'] ?>" class="btn btn-sm btn-info">Lihat</a>
                    <a href="pengajuan-selesai.php?id_pinjam=<?= $d['id_pinjam'] ?>&nim_mhs=<?= $nim_mhs ?>" class="btn btn-sm btn-success">Selesai</a>
                  <?php  } ?>
                </td>
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

<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">

            <h3 style="margin-bottom: 30px; text-align: center;">Data Ruangan</h3>

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
                  <center>Kode Ruangan
                </th>
                <th>
                  <center>Kondisi
                </th>
                <!-- <th>
                  <center>Status
                </th> -->
                <th>
                  <center>Pilihan
                </th>
              </tr>
            </thead>

            <?php
            $no=1;
            include('koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * from tb_ruangan ");
            while ($d = mysqli_fetch_array($data)) {
             ?>

              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $d['nama_ruangan'] ?></td>
                <td><center><?= $d['kode_ruangan'] ?></td>
                <td><center>
                <?php
                if (($d['kondisi']) == 'baik' ) {
                  ?>
                  <span class="badge bg-success">Baik</span>
                <?php
                }elseif (($d['kondisi']) == 'tidak baik' ) {
                ?>
                  <span class="badge bg-danger">Tidak Baik</span>
                <?php  }else{ ?>
                  <span class="badge bg-primary">Tidak ada Informasi</span>
                <?php } ?>
                </td>
                  <!-- <td><center><?= "belum" ?></td> -->
                <td>
                  <center>
                  <a href="ruangan-lihat.php?id_ruangan=<?= $d['id_ruangan'] ?>" class="btn btn-sm btn-primary">Lihat</a>
                  <a href="ruangan-pinjam.php?id_ruangan=<?= $d['id_ruangan'] ?>&nim_mhs=<?= $nim_mhs ?>" class="btn btn-sm btn-success">Pinjam</a>
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

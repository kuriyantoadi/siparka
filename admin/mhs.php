<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">

            <h3 style="margin-bottom: 30px; text-align: center;">Data Mahasiswa</h3>

            <?php
            include('../alert.php');
             ?>
            <table class="table table-bordered table-hover" id="example">
              <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Nama Mahasiswa
                </th>
                <th>
                  <center>NIM
                </th>
                <th>
                  <center>Organisasi
                </th>
                <th>
                  <center>Kondisi
                </th>
                <th>
                  <center>Opsi
                </th>
              </tr>
            </thead>

            <?php
            $no=1;
            include('../koneksi.php');
            $data = mysqli_query($koneksi, "SELECT * from tb_mahasiswa ");
            while ($d = mysqli_fetch_array($data)) {
             ?>

              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $d['nama_mhs'] ?></td>
                <td><center><?= $d['nim_mhs'] ?></td>
                <td><center><?= $d['organisasi'] ?></td>
                <td><center>
                <?php
                if (($d['status']) == 'aktif' ) {
                  ?>
                  <span class="badge bg-success">Aktif</span>
                <?php
                }elseif (($d['status']) == 'tolak' ) {
                ?>
                  <span class="badge bg-danger">Tolak</span>
                <?php  }else{ ?>
                  <span class="badge bg-primary">belum validasi</span>
                <?php } ?>
                <td>
                  <center>
                    <a href="mhs-edit.php?nim_mhs=<?= $d['nim_mhs'] ?>"><i class="align-middle" data-feather="edit-2" alt="edit mahasiswa"></i></a>
                    <a href="mhs-hapus.php?nim_mhs=<?= $d['nim_mhs'] ?>"
                      onclick="return confirm('Anda yakin Hapus data Mahasiswa <?php echo $d['nama_mhs']; ?> ?')"><i class="align-middle" data-feather="trash"></i></a>
                    <a href="mhs-lihat.php?nim_mhs=<?= $d['nim_mhs'] ?>"><i class="align-middle" data-feather="eye"></i></a>

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

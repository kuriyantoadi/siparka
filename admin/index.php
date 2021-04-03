<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">

    <div class="row">

      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-header">

            <h3 style="margin-bottom: 30px; text-align: center;">Jadwal Penggunaan Ruangan</h3>

            <?php
            include('../alert.php');
             ?>
<!--
             <div class="row">
               <div class="col-9">
               </div>
               <div class="col-3">
                   <form class="" action="index.php" method="get">
                     <input type="text" name="tanggal" class="form-control datepicker" placeholder="Tanggal Peminjaman" required />
                     <input type="submit" class="btn btn-primary btn-sm" value="Cari">
                 </form>
                  </div>
               </div> -->


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
                    <center>Tanggal
                  </th>
                  <th>
                    <center>Organisasi
                  </th>
                  <th>
                    <center>Peminjam
                  </th>
                  <th>
                    <center>Agenda Acara
                  </th>
                </tr>
              </thead>

              <?php
            $no=1;
            include('../koneksi.php');
            // $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
            //   tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs and
            //   tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
            if(isset($_GET['tanggal'])){
            				$tgl = $_GET['tanggal'];
                    $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
                      tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs and
                      tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan and
                      tb_pinjam.tgl_peminjaman='$tgl'");
                  }else{
                    $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
                      tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs and
                      tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
            			}


            while ($d = mysqli_fetch_array($data)) {
             ?>

              <tr>
                <td>
                  <center><?= $no++ ?>
                </td>
                <td>
                  <center><?= $d['nama_ruangan'] ?>
                </td>
                <td>
                  <center><?= $d['tgl_peminjaman'] ?> s/d <?= $d['tgl_kembali'] ?>
                </td>
                <td>
                  <center><?= $d['organisasi'] ?>
                </td>
                <td>
                  <center><?= $d['nama_mhs'] ?>
                </td>
                <td>
                  <center><?= $d['des_keg'] ?>
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

<?php include('header.php') ?>
<main class="content">
  <div class="container-fluid p-0">


    <div class="row">
      <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
        <div class="card flex-fill w-100">
          <div class="card-body px-4">

            <h3 style="margin-bottom: 50px">
              <center>Pinjam Ruangan
            </h3>

            <form action="daftar-update.php" method="post" enctype="multipart/form-data">
              <?php
                      include('koneksi.php');
                      include('alert.php');
                      $nim_mhs = $_GET['nim_mhs'];
                      $data = mysqli_query($koneksi, "SELECT * from tb_mahasiswa WHERE nim_mhs=$nim_mhs ");
							        while ($d = mysqli_fetch_array($data)) {
                       ?>

              <div class="mb-3">
                <label class="form-label"><b>NIM Mahasiswa</label>
                <input class="form-control form-control-lg" type="text" name="nim_mhs" value="<?= $d['nim_mhs'] ?>" readonly />
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Nama Peminjam</label>
                <input class="form-control form-control-lg" type="text" name="nama_mhs" value="<?= $d['nama_mhs'] ?>" readonly />
              </div>

              <?php } ?>

              <?php
                      $id_ruangan = $_GET['id_ruangan'];
							        $data = mysqli_query($koneksi, "SELECT * from tb_ruangan WHERE id_ruangan=$id_ruangan ");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>
              <br><img src="img/ruang/<?= $d['photo_ruangan'] ?>" class="img-thumbnail img-fluid" alt="photo belum tidak di input">

              <div class="mb-3">
                <label class="form-label"><b>Kode Ruangan</label>
                <input class="form-control form-control-lg" type="text" name="kode_ruangan" value="<?= $d['kode_ruangan'] ?>" readonly />
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Nama Ruangan</label>
                <input class="form-control form-control-lg" type="text" name="nama_ruangan" value="<?= $d['nama_ruangan'] ?>" readonly />
              </div>


              <div class="mb-3">
                <label class="form-label"><b>Tanggal Peminjaman</label>
                <input class="form-control form-control-lg" type="date" name="tgl_peminjaman" required />
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Waktu Peminjaman</label>
                <select class="form-control" name="wkt_peminjaman">
                  <?php
                  for ($i = 0; $i < 25; $i++){
                   ?>
                  <option value="<?= $i ?>:00"><?= $i ?>:00</option>
                  <?php } ?>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Tanggal Pengembalian</label>
                <input class="form-control form-control-lg" type="date" name="tgl_kembali" required />
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Waktu Pengembalian</label>
                <select class="form-control" name="wkt_kembali">
                  <?php
                  for ($i = 0; $i < 25; $i++){
                   ?>
                  <option value="<?= $i ?>:00"><?= $i ?>:00</option>
                  <?php } ?>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Deskripsi Kegiatan</label>
                <textarea class="form-control" rows="3" placeholder="" name="des_keg"></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label"><b>Unggah Surat Perizinan</label>
                <input class="form-control" type="file" name="surat_izin" required />
                <div class="form-text">File berformat jpg, png, jpeg dan maksimal ukuran 1 MB</div>
              </div>

              <div class="mb-3"><center>
                <input type="submit" class="btn btn-primary btn" value="Kirim" name="upload">
              </div>

              <?php } //tampil data mahasiswa ?>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</main>

<?php include('footer.php') ?>

<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3><center>Profil Mahasiswa</h3>

										<form action="mhs-ktm-up.php" method="post" enctype="multipart/form-data">
							        <?php
							        include('../koneksi.php');
                      include('../alert.php');
							        $nim_mhs = $_GET['nim_mhs'];
							        $data = mysqli_query($koneksi, "SELECT * from tb_mahasiswa WHERE nim_mhs=$nim_mhs ");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>
							        <div class="mb-3">
							          <label class="form-label"><b>Nama</label>
							          <input class="form-control form-control-lg" type="text" name="nama_mhs" value="<?= $d['nama_mhs'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Nomor Kartu Tanda Mahasiswa</label>
							          <input class="form-control form-control-lg" type="text" name="nim_mhs" value="<?= $d['nim_mhs'] ?>" readonly />
							        </div>

                      <div class="mb-3">
                        <label class="form-label"><b>Kartu Tanda Mahasiswa<br></label>
                      </div>

                      <div class="mb-3">
                        <!-- <embed src="../img/ktm/<?= $d['ktm']; ?>" type="application/pdf" width="70%" height="500px"> -->
												<br><img src="../img/ktm/<?= $d['ktm'] ?>" class="img-thumbnail img-fluid" alt="KTM belum tidak di input">

										  </div>
                      <div class="mb-3">
                        <label class="form-label"><b>Ganti Kartu Tanda Mahasiswa<br></label>
                        <input class="form-control" type="file" name="ktm" required/>
  											<div class="form-text">File berformat pdf dan maksimal ukuran 1 MB</div>
                      </div><center>
                      <input type="submit" class="btn btn-primary btn" value="Ganti KTM" name="upload">

                  <?php } //tampil data mahasiswa ?>
							      </form>
									</div>
								</div>
						</div>
					</div>


				</div>
			</main>

<?php include('footer.php') ?>

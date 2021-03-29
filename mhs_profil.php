<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3><center>Profil Mahasiswa</h3>

										<form action="daftar-update.php" method="post" enctype="multipart/form-data">
							        <?php
							        include('koneksi.php');
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
							          <label class="form-label"><b>Organisasi</label>
							          <input class="form-control form-control-lg" type="text" name="organisasi" value="<?= $d['organisasi'] ?>" readonly/>
							        </div>
											<div class="mb-3">
							          <label class="form-label"><b>Jurusan</label>
							          <input class="form-control form-control-lg" type="text" name="jurusan" value="<?= $d['jurusan'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Email</label>
							          <input class="form-control form-control-lg" type="email" name="email" value="<?= $d['email'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Nomor Handphone</label>
							          <input class="form-control form-control-lg" type="text" name="no_hp" value="<?= $d['no_hp'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Alamat</label>
							          <input class="form-control form-control-lg" type="text" name="alamat" value="<?= $d['alamat'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Kata Sandi</label>
							          <input class="form-control form-control-lg" type="password" name="password" value="***" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Konfirmasi Kata Sandi</label>
							          <input class="form-control form-control-lg" type="password" name="konfirmasi" value="***" readonly/>
							        </div>
											<div class="mb-3">
												<label class="form-label"><b>Upload Kartu Tanda Mahasiswa<br></label>
											</div>

							        <div class="mb-3">
												<embed src="img/ktm/<?= $d['ktm']; ?>" type="application/pdf" width="70%" height="500px">
							        </div>

							      <?php } ?>
							      </form>
									</div>
								</div>
						</div>
					</div>


				</div>
			</main>

<?php include('footer.php') ?>

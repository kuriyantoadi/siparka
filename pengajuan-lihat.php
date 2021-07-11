<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3 style="margin-bottom: 50px"><center>Lihat Pengajuan</h3>

										<form action="daftar-update.php" method="post" enctype="multipart/form-data">
							        <?php
							        include('koneksi.php');
                      include('alert.php');
							        $id_pinjam = $_GET['id_pinjam'];
                      $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan where tb_pinjam.id_pinjam=$id_pinjam and tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>
                     <div class="mb-3">
                       <br><img src="img/ruang/<?= $d['photo_ruangan'] ?>" width="60%" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                     </div>

							        <div class="mb-3">
							          <label class="form-label"><b>Nama Ruangan</label>
							          <input class="form-control form-control-lg" type="text" name="nama_ruangan" value="<?= $d['nama_ruangan'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Kode Ruangan</label>
							          <input class="form-control form-control-lg" type="text" name="kode_ruangan" value="<?= $d['kode_ruangan'] ?>" readonly />
							        </div>

											<div class="mb-3">
												<label class="form-label"><b>Deskripsi Ruangan</label>
												<input class="form-control form-control-lg" type="text" name="des_ruangan" value="<?= $d['des_ruangan'] ?>" readonly />
											</div>

											<div class="mb-3">
												<label class="form-label"><b>Kondisi</label>
												<input class="form-control form-control-lg" type="text" name="kondisi" value="<?= $d['kondisi'] ?>" readonly />
											</div>
                      <div class="mb-3"><center>
                        <a href="pengajuan-surat.php?id_pinjam=<?= $d['id_pinjam'] ?>&nim_mhs=<?= $d['nim_mhs'] ?>" class="btn btn-success">Download Surat Peminjaman</a>
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

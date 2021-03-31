<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3 style="margin-bottom: 50px"><center>Informasi Ruangan</h3>

										<form action="ruangan-edit-up.php" method="post" enctype="multipart/form-data">
							        <?php
							        include('../koneksi.php');
                      include('../alert.php');
							        $id_ruangan = $_GET['id_ruangan'];
							        $data = mysqli_query($koneksi, "SELECT * from tb_ruangan WHERE id_ruangan=$id_ruangan ");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>
							        <div class="mb-3">
							          <label class="form-label"><b>Nama Ruangan</label>
							          <input class="form-control form-control-lg" type="text" name="nama_ruangan" value="<?= $d['nama_ruangan'] ?>" required/>
												<input class="form-control form-control-lg" type="hidden" name="id_ruangan" value="<?= $d['id_ruangan'] ?>" required/>
										  </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Kode Ruangan</label>
							          <input class="form-control form-control-lg" type="text" name="kode_ruangan" value="<?= $d['kode_ruangan'] ?>" required />
							        </div>

											<div class="mb-3">
										 	<label class="form-label"><b>Deskripsi Ruangan<br></label>
											<input class="form-control form-control-lg" type="text" name="des_ruangan" value="<?= $d['des_ruangan'] ?>" required />
										 </div>

											<div class="mb-3">
												<label class="form-label"><b>Kondisi</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="kondisi" value="baik" checked>
														<label class="form-check-label" for="flexRadioDefault1">
															Baik
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="kondisi" value="tidak baik" >
														<label class="form-check-label" for="flexRadioDefault2">
															Tidak Baik
														</label>
													</div>
												</div>

												<div class="mb-3">
													<label class="form-label"><b>Photo Ruangan<br></label>
														<?php if (empty($d['photo_ruangan'])) { ?>
															<input class="form-control" type="file" name="photo_ruangan" />
														<?php  }else{ ?>
															<br><img src="../img/ruang/<?= $d['photo_ruangan'] ?>" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
															<br><a style="margin: 20px" class="btn btn-danger btn-sm" href="ruangan-photo-hps.php?id_ruangan=<?= $d['id_ruangan'] ?>&photo_ruangan=<?= $d['photo_ruangan'] ?>"
																onclick="return confirm('Anda yakin Hapus photo ruangan <?php echo $d['nama_ruangan']; ?> ?')">Hapus Photo</a>
														<?php } ?>
												</div>

                        <center><input type="submit" name="upload" value="Simpan" class="btn btn-primary">

                  <?php } //tampil data mahasiswa ?>
							      </form>
									</div>
								</div>
						</div>
					</div>


				</div>
			</main>

<?php include('footer.php') ?>

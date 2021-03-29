<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3 style="margin-bottom: 50px"><center>Informasi Ruangan</h3>

										<form action="daftar-update.php" method="post" enctype="multipart/form-data">
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
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Kode Ruangan</label>
							          <input class="form-control form-control-lg" type="text" name="kode_ruangan" value="<?= $d['kode_ruangan'] ?>" required />
							        </div>

											<div class="mb-3">
												<label class="form-label"><b>Photo 1 Ruangan<br></label>
                          <?php if (empty($d['photo1'])) { ?>
                            <input class="form-control" type="file" name="photo1" />
                          <?php  }else{ ?>
                            <br><a style="margin: 20px" class="btn btn-danger" href="ruangan-photo-hps.php?id_ruangan=<?= $d['id_ruangan'] ?>&id_photo=photo1">Hapus Photo</a>
                            <img src="../img/ruang/<?= $d['photo1'] ?>" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                          <?php } ?>
                    	</div>

                      <div class="mb-3">
                        <label class="form-label"><b>Photo 2 Ruangan</label>
                          <?php if (empty($d['photo2'])) { ?>
                            <input class="form-control" type="file" name="photo2" />
                          <?php  }else{ ?>
                            <br><a href="ruangan-photo-hps.php?id_ruangan=<?= $d['id_ruangan'] ?>&id_photo=photo2"></a>
                            <img src="../img/ruang/<?= $d['photo1'] ?>" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                          <?php } ?>
                        </div>

                      <div class="mb-3">
                        <label class="form-label"><b>Photo 3 Ruangan</label>
                          <?php if (empty($d['photo3'])) { ?>
                            <input class="form-control" type="file" name="photo1" />
                          <?php  }else{ ?>
                            <a href="ruangan-photo-hps.php?id_ruangan=<?= $d['id_ruangan'] ?>&id_photo=photo3"></a>
                            <img src="../img/ruang/<?= $d['photo3'] ?>" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
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

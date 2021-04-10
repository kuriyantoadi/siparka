<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3><center>Profil Mahasiswa</h3>

										<form action="profil-pass-up.php" method="post" enctype="multipart/form-data">
							        <?php
							        include('../koneksi.php');
                      include('../alert.php');
							        $id_user = $_GET['id_user'];
							        $data = mysqli_query($koneksi, "SELECT * from tb_user WHERE username='$username' ");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>
							        <div class="mb-3">
							          <label class="form-label"><b>Nama</label>
							          <input class="form-control form-control-lg" type="text" name="username" value="<?= $d['username'] ?>" readonly/>
                        <input class="form-control form-control-lg" type="hidden" name="id_user" value="<?= $d['id_user'] ?>" readonly/>
							        </div>

							        <div class="mb-3">
							          <label class="form-label"><b>Kata Sandi</label>
							          <input class="form-control form-control-lg" type="password" name="password" required/>
							        </div>

                      <div class="mb-3"><center>
                        <input type="submit" class="btn btn-primary btn" value="Ganti Password">
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

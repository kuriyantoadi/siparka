<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3><center>Profil Admin</h3>

										<form action="daftar-update.php" method="post" enctype="multipart/form-data">
							        <?php
											include('../alert.php');
							        include('../koneksi.php');
							        $data = mysqli_query($koneksi, "SELECT * from tb_user WHERE username='$username' ");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>
											 <div class="mb-3">
												 <a href="profil-pass.php?id_user=<?= $d['id_user'] ?>" class="btn btn-danger" >Ganti Password</a>
											 </div>

							        <div class="mb-3">
							          <label class="form-label"><b>Username</label>
							          <input class="form-control form-control-lg" type="text" name="nama_mhs" value="<?= $d['username'] ?>" readonly/>
							        </div>
							        <div class="mb-3">
							          <label class="form-label"><b>Password</label>
							          <input class="form-control form-control-lg" type="text" name="nim_mhs" value="<?= $d['password'] ?>" readonly />
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

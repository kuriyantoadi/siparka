<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Daftar SIPARKA</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<img width="200px" src="img/siparka.png" alt="" style="margin-bottom: 20px">
							<h3 class="h3" style="margin-bottom: 20px">Pendaftaran Sistem Informasi Peminjaman Ruangan</h3>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<?php include('alert.php') ?>
									<form action="daftar-update.php" method="post" enctype="multipart/form-data">
										<div class="mb-3">
											<label class="form-label"><b>Nama</label>
											<input class="form-control form-control-lg" type="text" name="nama_mhs" placeholder="Masukan nama lengkap" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Nomor Kartu Tanda Mahasiswa</label>
											<input class="form-control form-control-lg" type="text" name="nim_mhs" placeholder="Masukan nomor identitas / NIM" required />
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Organisasi</label>
											<input class="form-control form-control-lg" type="text" name="organisasi" placeholder="Masukan nama organisasi" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Jurusan</label>
												<select class="form-control" name="jurusan" required>
													<option value="">Pilih Jurusan</option>
													<?php
													include('koneksi.php');
													$data = mysqli_query($koneksi, "SELECT nama_jurusan from tb_jurusan ");
										      while ($d = mysqli_fetch_array($data)) {
													 ?>

													 <option value="<?= $d['nama_jurusan'] ?>"> <?= $d['nama_jurusan'] ?></option>

												 <?php } ?>
												</select>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Masukan email" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Nomor Handphone</label>
											<input class="form-control form-control-lg" type="text" name="no_hp" placeholder="Masukan nomor handphone" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Alamat</label>
											<input class="form-control form-control-lg" type="text" name="alamat" placeholder="Masukan alamat" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Kata Sandi</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukan Kata Sandi" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Konfirmasi Kata Sandi</label>
											<input class="form-control form-control-lg" type="password" name="konfirmasi" placeholder="Konfirmasi Kata Sandi" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Upload Kartu Tanda Mahasiswa</label>
											<input class="form-control" type="file" name="ktm" required/>
											<div class="form-text">File berformat pdf dan maksimal ukuran 1 MB</div>
										</div>
										<div class="text-center mt-3">
											<input type="submit" class="btn btn-primary btn" value="Daftar" name="upload">
										</div>
									</form>
									<small>
										<a href="login.php">Sudah punya akun Siparka | Login</a>
									</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>

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
	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

	<title>Login | Siparka</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="../img/siparka.png" alt="" height="80px" style="margin-bottom: 40px">
									</div>
									<form action="cek-login.php" method="post">

										<?php include('../alert.php'); ?>

										<div class="mb-3">
											<label class="form-label"><b>Nama Akun</b></label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukan nama akun" required/>
										</div>
										<div class="mb-3">
											<label class="form-label"><b>Kata Sandi</b></label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukan kata sandi" required/>

										</div>

										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary" style="margin-top: 20px">Login</button>
											<!-- <a class="btn btn-lg btn-success" href="#" style="margin-top: 20px">Daftar</a> -->
										</div>

									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="../js/app.js"></script>

</body>

</html>

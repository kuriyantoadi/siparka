<?php
ob_start();
session_start();
if ($_SESSION['status'] != "aktif") {
    header("location:login.php?pesan=belum_login");
}
$nim_mhs = $_SESSION['nim_mhs'];
 ?>

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

	<title>Siparka | Mahasiswa</title>

  <link href="datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="">
          <span class="align-middle">SIPARKA | Mahasiswa</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="mhs-dash.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="mhs-profil.php?nim_mhs=<?= $nim_mhs  ?>">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil Saya</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pengajuan.php">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Peminjaman</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ruangan.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Info Ruangan</span>
            </a>
					</li>

				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
              <?php
              include('koneksi.php');
              $cek_mhs = mysqli_query($koneksi, "SELECT * from tb_mahasiswa where nim_mhs='$nim_mhs' ");
              while ($siapa_mhs = mysqli_fetch_array($cek_mhs)) {
               ?>

               <span class="text-dark"><?= $siapa_mhs['nama_mhs'] ?></span>
                <?php } ?>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

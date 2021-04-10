<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3 style="margin-bottom: 50px;"><center>Informasi Peminjaman</h3>

										<form action="daftar-update.php" method="post" enctype="multipart/form-data">
							        <?php
							        include('../koneksi.php');
                      include('../alert.php');
							        $id_pinjam = $_GET['id_pinjam'];
                      $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
                        tb_pinjam.id_pinjam=$id_pinjam
                        and tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs
                        and tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan");
							        while ($d = mysqli_fetch_array($data)) {
							         ?>

                       <table class="table table-bordered">
                         <tr>
                           <td colspan="2">
                             <br><img src="../img/ruang/<?= $d['photo_ruangan'] ?>" width="50%" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                           </td>
                         </tr>
                         <tr>
                           <td>Nama Peminjam</td>
                           <td>: <?= $d['nama_mhs'] ?></td>
                         </tr>
                         <tr>
                           <td>NIM</td>
                           <td>: <?= $d['nim_mhs'] ?></td>
                         </tr>
                         <tr>
                           <td>Tanggal Transaksi</td>
                           <td>: <?= $d['tgl_pengajuan'] ?></td>
                         </tr>
                         <tr>
                           <td>Tanggal Peminjaman</td>
                           <td>: <?= $d['tgl_peminjaman'] ?>,  <?= $d['wkt_peminjaman'] ?></td>
                         </tr>
                         <tr>
                           <td>Tanggal Kembali</td>
                           <td>: <?= $d['tgl_kembali'] ?>, <?= $d['wkt_kembali'] ?></td>
                         </tr>
                         <tr>
                           <td>Nama Kegiatan</td>
                           <td>: <?= $d['des_keg'] ?></td>
                         </tr>
                         <tr>
                           <td>Status Peminjaman</td>
                           <td>: <?= $d['status_peminjaman'] ?></td>
                         </tr>
                       </table>
									</div>
								</div>
						</div>

            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3 style="margin-bottom: 50px;"><center>Bukti Peminjaman</h3>

                       <table class="table table-bordered">
                         <tr>
                           <td>Kartu Tanda Mahasiswa</td>
                           <td>
                             <br><img src="../img/ktm/<?= $d['ktm'] ?>" width="50%" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                           </td>
                         </tr>
                         <tr>
                           <td>Surat Perizinan</td>
                           <td>
                             <br><img src="../img/surat_izin/<?= $d['surat_izin'] ?>" width="50%" class="img-thumbnail img-fluid" alt="photo belum tidak di input">
                           </td>
                         </tr>
														<?php if ($d['status_peminjaman'] == "Menunggu Konfirmasi") { ?>
													<tr>
														<td colspan="2"><center>
															<a href="peminjaman-diizinkan.php?id_pinjam=<?= $d['id_pinjam'] ?>" class="btn btn-success" onclick="return confirm('Anda yakin Izinkan pengajuan <?php echo $d['nama_mhs']; ?> ?')">Diizinkan</a>
															<a href="peminjaman-ditolak.php?id_pinjam=<?= $d['id_pinjam'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin tolak pengajuan <?php echo $d['nama_mhs']; ?> ?')">Ditolak</a>
														</td>
													</tr>
														<?php	}elseif ($d['status_peminjaman']){ ?>
															<tr>
																<td>Kritik</td>
																<td>: <?= $d['kritik'] ?></td>
															</tr>
															<tr>
																<td>Saran</td>
																<td>: <?= $d['saran'] ?></td>
															</tr>

														<?php	} ?>
                       </table>

                       <center>

                       <?php } //tampil data mahasiswa ?>
							      </form>
									</div>
								</div>
						</div>
					</div>


				</div>
			</main>

<?php include('footer.php') ?>

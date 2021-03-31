<?php include('header.php') ?>
			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-body px-4">

									<h3><center>Tambah Ruangan</h3>

										<form action="ruangan-tmbh-up.php" method="post" enctype="multipart/form-data">

							        <div class="mb-3">
							          <label class="form-label"><b>Nama Ruangan</label>
							          <input class="form-control form-control-lg" type="text" name="nama_ruangan"  required />
							        </div>
											<div class="mb-3">
											 <label class="form-label"><b>Kode Ruangan</label>
											 <input class="form-control form-control-lg" type="text" name="kode_ruangan"  required/>
										 </div>

										 <div class="mb-3">
									 		<label class="form-label"><b>Deskripsi Ruangan<br></label>
            					<textarea class = "form-control" rows = "3" placeholder = "" name="des_ruangan"></textarea>
										</div>

                      <div class="mb-3">
                        <label class="form-label"><b>Photo Ruangan<br></label>
                        <input class="form-control" type="file" name="photo_ruangan" required/>
                        <div class="form-text">File berformat jpg, jpeg atau png dan maksimal ukuran 2 MB</div>
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

											<div class="mb-3"><center>
												<input type="submit" class="btn btn-primary" name="upload" value="Simpan">
										 </div>

							      </form>
									</div>
								</div>
						</div>
					</div>


				</div>
			</main>

<?php include('footer.php') ?>

          <center>
            <h3 style="margin-top: 30px; margin-bottom: 30px">Jadwal Peminjaman Ruangan</h3>
          </center>

            <table class="table table-bordered table-hover" id="example">
              <thead>
                <tr>
                  <th>
                    <center>No
                  </th>
                  <th>
                    <center>Nama Ruangan
                  </th>
                  <th>
                    <center>Tanggal
                  </th>
                  <th>
                    <center>Organisasi
                  </th>
                  <th>
                    <center>Peminjam
                  </th>
                  <th>
                    <center>Agenda Acara
                  </th>
                </tr>
              </thead>

              <?php
            $no=1;
            include('koneksi.php');

            if(isset($_GET['tanggal'])){
            				$tgl = $_GET['tanggal'];
                    $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
                      tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs and
                      tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan and
                      tb_pinjam.tgl_peminjaman='$tgl'");
                  }else{
                    $data = mysqli_query($koneksi, "SELECT * from tb_pinjam, tb_ruangan, tb_mahasiswa where
                      tb_pinjam.nim_mhs=tb_mahasiswa.nim_mhs and
                      tb_pinjam.kode_ruangan=tb_ruangan.kode_ruangan and
                      tb_pinjam.status_peminjaman='Diizinkan'
                      ");
            			}


            while ($d = mysqli_fetch_array($data)) {
             ?>

              <tr>
                <td>
                  <center><?= $no++ ?>
                </td>
                <td>
                  <center><?= $d['nama_ruangan'] ?>
                </td>
                <td>
                  <center><?= $d['tgl_peminjaman'] ?> s/d <?= $d['tgl_kembali'] ?>
                </td>
                <td>
                  <center><?= $d['organisasi'] ?>
                </td>
                <td>
                  <center><?= $d['nama_mhs'] ?>
                </td>
                <td>
                  <center><?= $d['des_keg'] ?>
                </td>
              </tr>
              <?php } ?>
            </table>



<script>
$(document).ready(function() {
  $('#example').DataTable();
});

</script>

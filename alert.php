<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "belum_validasi") {
        echo "
        <div class='alert alert-primary alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Akun anda belum tervalidasi! <strong>Silahkan melakukan validasi</strong>
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "belum_terdaftar") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Maaf, akun yang anda input belum terdaftar / Kata Sandi Salah
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "akun_terdaftar") {
        echo "
        <div class='alert alert-primary alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Maaf, nomor Identitas yang anda masukan sudah terdaftar
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "konfirmasi_salah") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Password konfirmasi Salah
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "belum_login") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Maaf, anda belum login
          </div>
        </div>
        ";
  } elseif ($_GET['pesan'] == "logout") {
      echo "
      <div class='alert alert-primary alert-dismissible' role='alert'>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
        <div class='alert-message'>
          Anda berhasil Logout
        </div>
      </div>
          ";
    } elseif ($_GET['pesan'] == "mhs_aktif") {
        echo "
        <div class='alert alert-primary alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Mahasiswa Terkonfirmasi Aktif
          </div>
        </div>
        ";
  } elseif ($_GET['pesan'] == "mhs_tolak") {
      echo "
      <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
        <div class='alert-message'>
          Mahasiswa Terkonfirmasi Tolak
        </div>
      </div>
      ";
  } elseif ($_GET['pesan'] == "password_baru") {
      echo "
      <div class='alert alert-primary alert-dismissible' role='alert'>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
        <div class='alert-message'>
          Password Update
        </div>
      </div>
      ";
  } elseif ($_GET['pesan'] == "ktm_ganti") {
      echo "
      <div class='alert alert-primary alert-dismissible' role='alert'>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
        <div class='alert-message'>
          Kartu Tanda Mahasiswa Update
        </div>
      </div>
      ";
  } elseif ($_GET['pesan'] == "mhs_edit") {
      echo "
      <div class='alert alert-primary alert-dismissible' role='alert'>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
        <div class='alert-message'>
          Data Mahasiswa Berhasil di <b>Edit</b>
        </div>
      </div>
      ";
  } elseif ($_GET['pesan'] == "mhs_hapus") {
      echo "
      <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
        <div class='alert-message'>
          Data Mahasiswa Berhail di <b>Hapus</b>
        </div>
      </div>
      ";
  }
}
?>

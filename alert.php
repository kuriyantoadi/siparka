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
    }
}
?>

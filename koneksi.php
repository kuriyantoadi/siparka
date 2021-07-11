<?php
$koneksi = mysqli_connect("localhost", "siparkac_siparka", "K0AIgdyS", "siparkac_siparka");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

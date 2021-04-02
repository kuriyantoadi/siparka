<?php

include '../koneksi.php';

$tgl_peminjaman = '01-03-2021';
$tgl_kembali = '02-03-2021';

if ($tgl_peminjaman > $tgl_kembali) {
  echo "tgl kembali lebih lama";
}

// tgl pinjam => tgl kembali
$data1  = mysqli_query($koneksi, "SELECT * from tb_test where tgl between '$tgl_peminjaman' and '$tgl_kembali'");
while ($d = mysqli_fetch_array($data1)) {
 $cek_pinjam =  $d['tgl'];
 echo $cek_pinjam;
}

echo "<br>";

// echo "logika A = ";
// if(!($cek_pinjam == '')){
//   echo "tgl tidak ada";
// }else{
//   echo "tgl ada";
// }

echo "<br>";
echo "logika B = ";
if(!empty($cek_pinjam)){
  echo "Data ada yang sama";
}else{
  echo "Data Tidak ada yang sama";
}

$tgl = date('d-m-Y');
echo $tgl;

// echo $cek_pinjam;
 ?>

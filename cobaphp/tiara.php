<?php
// siapkan 2 angka awal
$default = 0;
$angka_sekarang = $angka_sebelumnya+$default;


function fibo($angka_sebelumnya, $n) {
//tampilkan 2 angka awal
echo $angka_sebelumnya.", ".$angka_sekarang;
for ($i=0; $i<$n; $i++)
{
  // hitung angka yang akan ditampilkan
  $output = $angka_sekarang + $angka_sebelumnya;
  echo ", ".$output;
 
  //siapkan angka untuk perhitungan berikutnya
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}

}
echo fibo(3, 5);
// hasil:
// 0 1 1 2 3 5 8 13 21 34 55 89
?>



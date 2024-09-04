<?php

  $uang = 195000;
  $lembarUang = [100000, 20000, 10000, 5000, 2000, 1000, 500];
  $hasil = [];

  foreach ($lembarUang as $nilai) {
    $jumlahLembar = floor($jumlah / $nilai);
    $uang %= $nilai;
  }
  foreach($hasil as $nilai => $lembar){
    echo "Rp. " . number_format($jumlah, 0, '.', '.') .":". $lembar."lembar";
    echo "<br>";  
  }

?>
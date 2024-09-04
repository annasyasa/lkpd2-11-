<?php

function cariAngka($data, $angka) {
  $counts = array_count_values($data);
  echo "Jumlah angka $angka = " . $counts[$angka] ;
}

$data = array(80, 90, 75, 100, 85, 100,66);
$angka = 100;

cariAngka($data, $angka);

?>
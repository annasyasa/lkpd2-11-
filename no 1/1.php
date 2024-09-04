<?php

$string = "Hello 12"; 

if (preg_match('/\d/', $string)) {
  $angka = array();
  preg_match_all('/\d/', $string, $angka);
  echo "Teks mengandung angka : " . implode(', ', $angka[0]);
} else {
  echo "Teks tidak mengandung angka";
}

?>
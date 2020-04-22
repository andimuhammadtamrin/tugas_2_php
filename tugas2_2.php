<?php
echo "Putri membeli boneka seharga Rp. 50.000.
  Kemudian, boneka dijual lagi dengan harga
  Rp. 80.000. Berapa persen keuntungan Putri?";
echo "<br>";
$beli = 50000;
$jual = 80000;
$untung = $jual - $beli;
$untungpersen = ($untung/$beli)*100;
echo "Diketahui <br>";
echo "Jual = $jual <br>";
echo "Beli = $beli <br>";
echo "Keuntungan <br>";
echo "Jawaban : <br>";
echo "Keuntungan = Rp. $jual - Rp. $beli = Rp. $untung";
echo "<br>";
echo "Keuntungan dalam Persen(%) = ($untung / $beli) * 100 % = $untungpersen % ";
echo "<br>";
echo "Jadi  keuntungan yang didapat putri dari menjual boneka adalah
$untungpersen %";


 ?>

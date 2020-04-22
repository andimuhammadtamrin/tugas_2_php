<!-- Diketahu
36 Hari = 12 Pekerja
X Hari = 24 Pekerja
X = ..?
-->

<?php
echo "Untuk mengerjakan 1 unit rumah dibutuhkan
waktu 36 hari dengan 12 tenaga kerja.
Berapa waktu akan dihabiskan bila menggunakan
24 orang tenaga kerja? ";
echo "<br>";
$hari1 = 36;
$pekerja1 = 12;
$pekerja2 = 24;
$hari2 = $hari1*$pekerja1/$pekerja2;
echo"Diketahui : <br>";
echo "<br>";
echo "$hari1 Hari = $pekerja1 Pekerja <br>";
echo "X Hari = $pekerja2 Pekerja <br>";
echo "X = ...<br>";
echo "Jawaban <br>";
echo "X = $hari1 * $pekerja1 / $pekerja2 = $hari2 <br>";
echo "Jadi waktu yang diperlukan untuk membangung satu unit
rumah dengan 24 pekerja adalah $hari2 Hari";

?>

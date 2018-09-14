<?php
/*Jika Harry mempunyai uang sebesar Rp50.000,00, lalu dia membelanjakan makanan sebesar Rp25.000,00
dan juga minuman sebesar Rp10.000. Maka berapa sisa uang berapa Harry dan juga apakah
dia termasuk hemat atau boros?*/

$uang = 50000;
$makanan = 25000;
$minuman = 10000;
$jjajan = $makanan + $minuman;
$sisauang = $uang - $jjajan;

    echo "<h1 style =color:red><center>Sisa uang Harry setelah dijajankan menjadi sejumlah Rp$sisauang,00 <br><center></h1>";

if ($sisauang >= 25000) {
    echo "Harry termasuk <b>hemat!</b>";
} else if ($sisauang >= 10000) {
    echo "Harry termasuk <b>Biasa aja!<b>";
} else {
    echo "Harry termasuk <b>boros!</b>";
}
?>
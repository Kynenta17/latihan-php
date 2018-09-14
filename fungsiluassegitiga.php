<?php
    function luas_segitiga ($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
    }
    //pemanggilan fungsi
    $al = 7;
    $ti = 18;
    echo "Luas segitiga yaitu 1/2 x alas ($al) x tinggi ($ti) = ";
    echo luas_segitiga($al, $ti);
?>
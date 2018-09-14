<?php
    function luas_persegipanjang ($panjang, $lebar) {
    return $panjang * $lebar;
    }
    //pemanggilan fungsi
    $pan = 10;
    $le = 20;
    echo "Luas persegi panjang yaitu panjang ($pan) x lebar ($le) = ";
    echo luas_persegipanjang($pan, $le);
?>
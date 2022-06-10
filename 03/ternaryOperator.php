<?php
    $topiSaya = "bundar";
    
    if($topiSaya != "bundar"){
        echo "Bukan Topi Saya";
    } else {
        echo "Topi Saya";
    }

    echo $topiSaya == "bundar" ? "Topi Saya" : "Bukan Topi Saya";

    $nilai = 50;

    echo $nilai >= 90 ? "Bagus" : ($nilai >= 80 ? "Baik" : ($nilai >= 70 ? "Biasa" : "Jelek"));
?>
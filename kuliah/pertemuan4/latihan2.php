<?php
// hitung total volume 2 kubus
// sisi kubus a = 9, sisi kubus b = 4

// $sisi_a = 9;
// $sisi_b = 4;

// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $totalAB = $volume_a + $volume_b;
// echo "Total volume kubus A dan B = $totalAB";



function VolumeKubus($a, $b) {
    $volume_a = $a * $a * $a ;
    $volume_b = $b * $b * $b ;
    $total = $volume_a + $volume_b ; 

    return $total; 

    // return $a * $a * $a * $b * $b *$b;
}

    echo VolumeKubus(9, 4);




?>


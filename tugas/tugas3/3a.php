<?php

// Menghitung Luas Lingkaran

echo "<h4>Menghitung Luas Lingkaran</h4>";
function luaslingkaran($r) {


    $luas = 3.14 * $r * $r ;
    echo "jari-jari = $r  cm.<br>" ;
    echo "Luas Lingkaran = $luas cm<sup>2</sup>";
    return $luas ;

}

luaslingkaran(10) ;
echo "<hr>" ;

// Menghitung Keliling Lingkaran

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungkelilinglingkran($r) 
{
    $keliling = 2 * 3.14 * $r ;
    echo "jari-jari = $r cm. <br>";
    echo "keliling lingkaran = $keliling cm" ;
    return $keliling;

}


hitungkelilinglingkran(20);

echo "<hr>";

?>




<?php
function urutan_angka($angka)
{
    $nomer = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $nomer . ' ';
            $nomer++;

        }
        echo "<br>";
    }
}
urutan_angka(5);
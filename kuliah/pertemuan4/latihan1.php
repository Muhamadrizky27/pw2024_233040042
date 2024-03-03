<?php
echo date('j/n/Y');
echo "<br>";
echo date('l, j F Y');
echo "<br>";
echo time();
echo "<br>";
echo date('P', time() + 24 * 60 * 60 * 100);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);   
echo "<br>";
echo date("l", mktime(0,0,0,3,27,2004));
echo time();
<?php
$limite=30;
$a=0;
$b=1;
$auxiliar;
echo "---- Serie Fibonacci--- \n";
for ($i=0; $i <$limite ; $i++) { 
    $auxiliar=$a;
    $a=$b;
    $b=$auxiliar + $a;
    echo "-- $a \n";
}

?>
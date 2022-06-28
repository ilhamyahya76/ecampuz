<?php

function divide($dividend, $divisor) {
 
    $sign = (($dividend < 0) ^
             ($divisor < 0)) ? -1 : 1;

    $dividend = abs($dividend);
    $divisor = abs($divisor);
     
    $quotient = 0;
    while ($dividend >= $divisor)
    {
        $dividend -= $divisor;
        ++$quotient;
    }
    if($sign==-1) $quotient=-$quotient;
    return $quotient;
}
 
echo "Nilai 1 = ".$a = 5;
echo "<br>Nilai 2 = ".$b = 2;
echo "<br>Hasil = ".divide($a, $b);

?>

<!-- https://www.geeksforgeeks.org/divide-two-integers-without-using-multiplication-division-mod-operator/ !-->

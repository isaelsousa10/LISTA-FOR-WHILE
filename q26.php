<?php


$sp = 0;

$si = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $sp += $i;
    } 
    else {
        $si += $i;
    }
}

echo "A soma de todos os números pares é: " . $sp ;
echo " A soma de todos os números ímpares é: " . $si ;


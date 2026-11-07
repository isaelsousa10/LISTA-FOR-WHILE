<?php

$frete1 = 0;
$frete2 = 15;
$frete3 = 25;

for ($i = 1; $i <=8; $i ++) {

    $numero = readline("digite o valor da compra {$i}: ");

    if ($numero >=300) {
        echo "seu frete é ", $frete1 , " " . PHP_EOL;
    }
    elseif ($numero == 150 and $numero <300 ) {
       echo "seu frete é ", $frete2 , " " . PHP_EOL;
    }
    else {
     echo "seu frete é ", $frete3 , " " . PHP_EOL;
    }
}
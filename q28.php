<?php

$lotepequeno = 0;
$lotemedio = 0;
$lotegrande = 0;

for ($i = 1; $i <=10; $i ++) {

    $numero = readline("digite o peso da fruta {$i} em gramas: ");

    if ($numero <100) {
        $lotepequeno ++;
    }
    elseif ($numero == 100 and $numero <=200 ) {
        $lotemedio ++;
    }
    else {
        $lotegrande ++;
    }
}
echo "tem " , $lotepequeno , " de lote pequeno" ,
 " tem " , $lotemedio , " de lote medio", 
 " tem " , $lotegrande , " de lote grande" ;
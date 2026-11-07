<?php

$numero = readline("escolha um numero: ");


if ($numero < 0)
    echo "erro, somente numeros naturais";

else{

    $fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}
}
echo "o fatorial do numero é: " , $fatorial;
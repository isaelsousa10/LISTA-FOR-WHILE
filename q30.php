<?php

$valor = readline("valor que deseja sacar: ");
$resto = 0;

if ($valor <0 or $valor %2 != 0 ) {
    echo "pode não";
    exit;
}
$sacadoComSucesso = false;
$n10 = floor($valor / 10);

for ($i = $n10; $i >= 0; $i -- ) {
    $resto = $valor - ($i *10);

if ($resto %2 == 0){
    $valor2 = $resto / 2;
    echo "seu saque é: " . $valor. " suas notas de 10 são: ". $i . " suas notas de 2 são: " .$valor2;
    $sacadoComSucesso = true;
    break;
}
}
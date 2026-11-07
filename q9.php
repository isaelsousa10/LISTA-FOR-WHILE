<?php

$num1 = 0;

do {
    $num1 = readline("escolha um numero (digite zero para encerrar): ");
   
    $soma += $num1;
    
} while ($num1 != 0);

echo $soma;
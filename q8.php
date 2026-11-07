<?php

$opção = 0;
$v1 = "1 cadastrar aluno 
2 Consultar aluno
3 Excluir aluno
0 sair" . PHP_EOL;


do {
    echo $v1;
    $opção = readline( PHP_EOL . "Escolha uma opção: ");

 } while ($opção != 0);
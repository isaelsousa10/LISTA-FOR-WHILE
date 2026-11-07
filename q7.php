<?php

$somanotas = 0;
$i = 1;
$alunos = 5;

while ( $i <= $alunos) {
    echo "digite a nota do aluno ";
    $nota = (float) readline();

    $somanotas += $nota;

    $i ++;
}
echo "a soma da nota dos alunos é: ", $somanotas;
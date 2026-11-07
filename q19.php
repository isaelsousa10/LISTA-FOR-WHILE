<?php

$somaNotas = 0;
$totalAlunos = 5;


for ($i = 1; $i <= $totalAlunos; $i++) {
    
    echo "registre a nota do Aluno número {$i}: ";
    

    $nota = trim(fgets(STDIN));
    
    $somaNotas += (float)$nota;
}


$mediaTurma = $somaNotas / $totalAlunos;


echo "A média de notas da turma é: ". $mediaTurma . PHP_EOL;
?>

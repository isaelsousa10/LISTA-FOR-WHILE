<?php

$alunos_faltosos = 0;

for ($i = 1; $i <= 12; $i++) {
    
    echo "Por favor, registre a quantidade de faltas do Aluno número {$i}: ";
    
    $faltas = fgets(STDIN);
    
    $faltas = trim($faltas);

    if ($faltas <=15) {
        echo "dentro do limite de faltas" . PHP_EOL;
    }

 else {
        $alunos_faltosos ++;
    }
}

echo $alunos_faltosos .  " " . "alunos faltosos";
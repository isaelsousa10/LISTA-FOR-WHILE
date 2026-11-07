<?php

$produtoconsumo = 0;

for ($i = 1; $i <=5; $i ++) {
    echo "por favor digite a quantidade de porodotus do dia {$i}:";

    $produto = trim(fgets(STDIN));
    
    $produtoconsumo += (float)$produto;
}
echo $produtoconsumo;
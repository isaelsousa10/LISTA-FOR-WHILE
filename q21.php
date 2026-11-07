<?php

$aguaconsumo = 0;

for ($i = 1; $i <=6; $i ++) {
    echo "por favor digite o consumo de agua do dia {$i}:";

    $agua = trim(fgets(STDIN));
    
    $aguaconsumo += (float)$agua;
}
echo $aguaconsumo;
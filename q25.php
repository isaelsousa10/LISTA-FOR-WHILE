<?php

$temperaturatotal = 0;


for ($i = 1; $i <=7; $i ++) {
    echo "por favor digite a temperatura do dia {$i}: ";

    $temperatura = trim(fgets(STDIN));
    
    $temperaturatotal += (float)$temperatura;
}
$mediatemperatura = $temperaturatotal / 7;


echo "temperatura total: ", $temperaturatotal, " temperatura media: ", $mediatemperatura ;
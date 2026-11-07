<?php

$nsecret = 1234;
$tentativa = 0;

do {
    $tentativa = readline( "adivinhe o numero secreto ");
    if ($tentativa > $nsecret) {
        echo "esse numero é maior" . PHP_EOL;
        
    }
    elseif ($tentativa < $nsecret) {
        echo "esse numero é menor". PHP_EOL;
        
    }
    else {
        break;
    }
    
} while ( $tentativa != 1234 ); 
    echo "Parabéns! Você acertou!";


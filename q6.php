<?php

$senhaCorreta = "1234";

$senhaDigitada = "";


while ($senhaDigitada !== $senhaCorreta) {
    echo "Digite a senha: ";
    $senhaDigitada = trim(fgets(STDIN));
    
    if ($senhaDigitada !== $senhaCorreta) {
        echo "Senha incorreta! Tente novamente.";
    }
}

echo "Acesso permitido.";
?>

<?php
$idade = 17;
$acompanhado = 1;

echo "Você só pode entrar se for maior de idade ou se for menor e estiver acompanhado!" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos!!" . PHP_EOL;
    echo "Pode entrar!!";
} else if ($idade < 18 && $acompanhado < 2) {
    echo "Você só tem $idade anos!" . PHP_EOL;
    echo "Não pode entrar porque é menor de idade!";
} else if ($idade < 18 && $acompanhado > 1) {
    echo "Você é menor de idade porem está acompanhado" . PHP_EOL;
    echo "Pode entrar!";
}

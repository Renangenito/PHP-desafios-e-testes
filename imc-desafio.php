<?php
echo "-----------------------------".PHP_EOL;
echo "Índice de massa corporal(IMC)".PHP_EOL;
echo "-----------------------------".PHP_EOL;
$peso = 62;
$altura = 1.76;

$imc = $peso / ($altura * $altura);
echo "Seu IMC é de $imc".PHP_EOL;
if($imc >= 17 && $imc <= 18.5){
    echo"Está abaixo do peso!!";
}else if($imc >= 18.50 && $imc <= 25){
    echo "Parabens!! Seu Peso é o ideal!";
}else if($imc >= 25 && $imc <= 30){
    echo "Está acima do peso";
}    




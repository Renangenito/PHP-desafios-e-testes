<?php
//Contador de 1 até 15
// O Contador pula o número cinco e não imprime ele


for($contador = 1; $contador <= 15; $contador++){
    if($contador == 5){
        continue;
    }
    echo $contador.PHP_EOL;
}
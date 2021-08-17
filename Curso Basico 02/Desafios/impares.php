<?php

// Desafio 01 - Exibir os numeros impares entre 0 e 100

for($numero = 0; $numero <=100; $numero++){
    if ($numero % 2 != 0){
        echo "$numero.". PHP_EOL;
    }
}
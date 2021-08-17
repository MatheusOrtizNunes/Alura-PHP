<?php

// Dasafio 03. Calculo do IMC

$peso = 58;
$altura = 1.54;
$imc = 0;

$imc = $peso / ($altura * $altura) ;
$imc = round($imc, 2);

if ($imc < 18.5){
    echo "seu IMC é: $imc - Magreza ";
}elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "seu IMC é: $imc - Peso Normal";
}elseif ($imc >= 25 && $imc <= 29.9) {
    echo "seu IMC é: $imc - Sobrepeso";
}elseif ($imc >= 30.00 && $imc <= 39.9) {
    echo "seu IMC é: $imc - Obesidade";
}else{
    echo "seu IMC é: $imc - Obesidade Grave";
}
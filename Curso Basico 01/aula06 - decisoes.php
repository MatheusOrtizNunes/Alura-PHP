<?php

$idade = 19;
$numeroDePessoas = 2;

echo "Permitida a entrada de maiores de 18 anos." .PHP_EOL;

if($idade >= 18){
    echo "Pode entrar. ". PHP_EOL;
    echo "Você tem $idade anos";
}else if( $idade >= 16 && $numeroDePessoas > 1){
    echo "Voce pode entrar acompanhado";
}else{
    echo "Que pena você não pode entrar.";
}
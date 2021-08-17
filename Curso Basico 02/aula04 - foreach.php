<?php

$conta1 = [
    'titular' => 'Matheus', 
    'saldo' =>1000
];

$conta2 = [
    'titular' => 'Pedro', 
    'saldo' =>10000
];

$conta3 = [
    'titular' => 'Ivonete', 
    'saldo' =>5000
];

$contasCorrentes = [
    981986853044 => [
        'titular' => 'Ivonete', 
        'saldo' =>5000
    ],
    81986853052 => [
        'titular' => 'Ivonete', 
        'saldo' =>5000 
    ],
    11956853070 => [
        'titular' => 'Pedro', 
        'saldo' =>10000 
    ]
   
];

foreach ($contasCorrentes as $indice => $conteudoDaLista) {
    echo $conteudoDaLista['titular'] . " - ". $indice . PHP_EOL;
}


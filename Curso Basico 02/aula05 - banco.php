<?php

require 'aula06 - funcoes.php';

$contasCorrentes = [
    981986853044 => [
        'titular' => 'Ivonete', 
        'saldo' =>5000
    ],
    81986853052 => [
        'titular' => 'Ana', 
        'saldo' =>5000 
    ],
    11956853070 => [
        'titular' => 'Pedro', 
        'saldo' =>1000
    ]
   
];

$contasCorrentes[11956853070] = sacar($contasCorrentes[11956853070], 200 );
$contasCorrentes[981986853044]  = depositar($contasCorrentes[981986853044], 95);

foreach ($contasCorrentes as $conteudoDaLista) {
     exibeMensagem($conteudoDaLista['titular'] . " - ". $conteudoDaLista['saldo'] );
}



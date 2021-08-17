<?php

$conta1 = [
    'titular' => 'Matheus', 
    'saldo' =>1000
];

$conta2 = [
    'titular' => 'Pedro', 
    'saldo' =>10000
];

$contasCorrentes = [$conta1, $conta2];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular']. PHP_EOL;
}

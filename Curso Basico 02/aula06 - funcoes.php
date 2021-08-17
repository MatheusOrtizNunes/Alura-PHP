<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($conta['saldo'] > $valorASacar) {
        $conta['saldo'] -= $valorASacar;
        exibeMensagem("Saque realizado com sucesso!");
    }else {
        exibeMensagem("Saldo insuficiente não pode sacar.");
    }
    
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        exibeMensagem("Deposito realizado com sucesso!");
    } else {
        exibeMensagem("Valor negativo");
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;

}

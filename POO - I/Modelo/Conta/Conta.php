<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;
    private $saldo;
    private static  $numeroDeContas = 0;

    public function  __construct($titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        Conta::$numeroDeContas++;
        echo "Criando nova conta ". PHP_EOL;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar($valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo insuficiente";
        } else {
            $this->saldo -= $valorASacar;
            echo "Saldo realizado com sucesso ". PHP_EOL;
            echo $this->saldo;
        }
    }

    public function depositar($valorDoDeposito)
    {
        if ($valorDoDeposito > 0) {
            $this->saldo += $valorDoDeposito;
        } else {
            echo "Deposito tem que ser maior que zero. ";
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }

    public static function getNumeroDeContas()
    {
        // Self  - Carrega a classe que está chamando, semelhante a palavra reservada this.
        return self::$numeroDeContas;
    }


}

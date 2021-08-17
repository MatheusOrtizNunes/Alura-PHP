<?php

namespace  Alura\Banco\Modelo;

class Cpf
{
    private $cpf;

    public function __construct($cpf)
    {
        $this->cpf = $cpf;
        echo "CPF criado";
    }

    public function recuperarCpf()
    {
        return $this->cpf;
    }


}
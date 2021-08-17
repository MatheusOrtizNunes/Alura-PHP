<?php

namespace  Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private $cargo;


    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperarCargo(): string
    {
        return $this->cargo;
    }




}
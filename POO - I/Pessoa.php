<?php

namespace  Alura\Banco\Modelo;

class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct($nome, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome()
    {
        return $this->nome;
    }

    protected function recuperarCpf()
    {
        return $this->cpf;
    }




}
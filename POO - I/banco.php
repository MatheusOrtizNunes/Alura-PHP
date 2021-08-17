<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Endereco.php';
require_once 'Cpf.php';

$endereco = new Endereco('Soledade','Missoes','13 de Maio','1434');
$cpf = new Cpf('123.888.999-90');
$titular = new Titular($cpf, 'Fernanda', $endereco);
$conta = new Conta($titular);
var_dump($conta);


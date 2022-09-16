<?php

use Bruno\Banco\Modelo\CPF;
use Bruno\Banco\Modelo\Funcionario\Diretor;
use Bruno\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Bruno\Banco\Modelo\Funcionario\Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');

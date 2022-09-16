<?php

require_once 'autoload.php';

use Bruno\Banco\Service\ControladorDeBonificacoes;
use Bruno\Banco\Modelo\CPF;
use Bruno\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'bruno',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('123.951.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();

<?php

require_once 'autoload.php';

use Bruno\Banco\Modelo\Conta\Titular;
use Bruno\Banco\Modelo\Endereco;
use Bruno\Banco\Modelo\CPF;
use Bruno\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('São Luís', 'um bairro', 'minha rua', '71B');
$bruno = new Titular(new CPF('123.456.789-10'), 'Bruno Alves', $endereco);
$primeiraConta = new Conta($bruno);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

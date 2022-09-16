<?php

use Bruno\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Bruno\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Bruno',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(200);

echo $conta->recuperaSaldo();

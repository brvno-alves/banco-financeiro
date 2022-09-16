<?php

namespace Bruno\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600;
    }
}

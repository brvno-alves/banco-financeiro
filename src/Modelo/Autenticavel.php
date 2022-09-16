<?php

namespace Bruno\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}

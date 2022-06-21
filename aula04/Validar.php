<?php

declare(strict_types=1);

class Validar
{
    public function validarCpf(string $cpf): void
    {
        if (strlen($cpf) !== 11) { //apenas numeros
            die('Ops, CPF inválido');
        }
    }
}
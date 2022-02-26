<?php

namespace Src\Infra\Aluno;

use Src\Dominio\Aluno\CifradorSenhas;

class CifradorDeSenhaPhp implements CifradorSenhas
{
    public function cifrar(string $senha): string
    {
        return password_hash($senha, PASSWORD_ARGON2ID);
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return password_verify($senhaEmTexto, $senhaCifrada);
    }
}
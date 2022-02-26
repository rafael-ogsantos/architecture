<?php

namespace Src\Infra\Aluno;

use Src\Dominio\Aluno\CifradorSenhas;

class CifradorDeSenhaMd5 implements CifradorSenhas
{
    public function cifrar(string $senha): string
    {
        return md5($senha);   
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return md5($senhaEmTexto) === $senhaCifrada;
    }
}
<?php

namespace Src\Dominio\Aluno;

interface CifradorSenhas
{
    public function cifrar(string $senha): string;

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool;
}
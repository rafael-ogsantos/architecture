<?php

namespace Src\Dominio\Aluno;

use Src\Dominio\CPF;

interface AlunoRepository
{
    public function adicionar(Aluno $aluno): void;
    
    public function buscarPorCpf(CPF $cpf): Aluno;

    public function bucarTodos(): array;
}
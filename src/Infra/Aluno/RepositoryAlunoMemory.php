<?php

namespace Src\Infra\Aluno;

use Src\Dominio\Aluno\Aluno;
use Src\Dominio\Aluno\AlunoNaoEncontrado;
use Src\Dominio\Aluno\AlunoRepository;
use Src\Dominio\CPF;

class RepositoryAlunoMemory implements AlunoRepository
{
    private array $alunos = [];

    public function adicionar(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }
    
    public function buscarPorCpf(CPF $cpf): Aluno
    {
        $alunosFiltrados = array_filter($this->alunos, fn (Aluno $aluno) => $aluno->cpf() == $cpf);

        if(count($alunosFiltrados) === 0) {
            throw new AlunoNaoEncontrado($cpf);
        }

        if(count($alunosFiltrados) > 1) {
            throw new \Exception('Aluno não pode ter 2 cpf');
        }

        return $alunosFiltrados[0];
    }

    public function bucarTodos(): array
    {
        return $this->alunos;
    }
}
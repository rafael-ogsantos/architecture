<?php

namespace Src\Dominio\MatricularAluno;

use Src\Dominio\Aluno\Aluno;
use Src\Infra\Aluno\RepositoryAlunoMemory;
use Src\Infra\RepositoryAlunoComPdo;

class MatricularAluno
{
    private RepositoryAlunoMemory $repositorio;

    public function __construct(RepositoryAlunoMemory $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function execute(MatricularAlunoDto $dados)
    {
        $aluno = Aluno::comCpfNomeEEmail($dados->cpf, $dados->nome, $dados->email);
        $this->repositorio->adicionar($aluno);
    }
}
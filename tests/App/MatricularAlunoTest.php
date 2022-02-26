<?php

namespace Test\App;

use PHPUnit\Framework\TestCase;
use Src\Dominio\CPF;
use Src\Dominio\MatricularAluno\MatricularAluno;
use Src\Dominio\MatricularAluno\MatricularAlunoDto;
use Src\Infra\Aluno\RepositoryAlunoMemory;

class MatricularAlunoTest extends TestCase
{
    public function testAlunoDeveSerInseridoAoRepo()
    {
        $dadosAluno = new MatricularAlunoDto(
            '123.456.212.21',
            'teste',
            'mail@teste.com'
        );

        $repoAluno = new RepositoryAlunoMemory();
        $useCase = new MatricularAluno($repoAluno); 
        $useCase->execute($dadosAluno);       

        $aluno = $repoAluno->buscarPorCpf(new CPF('123.456.212.21'));
        $this->assertSame('teste', (string) $aluno->nome());
        $this->assertSame('mail@teste.com', (string) $aluno->email());
        $this->assertEmpty($aluno->telefones());
    }
}
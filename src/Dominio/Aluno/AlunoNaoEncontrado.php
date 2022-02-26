<?php

namespace Src\Dominio\Aluno;

use Src\Dominio\CPF;

class AlunoNaoEncontrado extends \DomainException
{
    public function __construct(CPF $cpf)
    {
        parent::__construct("Aluno com cpf $cpf não encontrado");
    }
}
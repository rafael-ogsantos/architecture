<?php

namespace Src\Infra\Aluno;

use Src\Dominio\Aluno\Aluno;
use Src\App\Indicacao\EnviaEmailIndicacao;

class EnviaEmailComPhpMailer implements EnviaEmailIndicacao
{
    public function enviaPara(Aluno $alunoIndicao): void
    {
           
    }
}
<?php

namespace Src\App\Indicacao;

use Src\Dominio\Aluno\Aluno;

interface EnviaEmailIndicacao
{
    public function enviaPara(Aluno $alunoIndicao): void;
}
<?php

namespace Src\Infra\Aluno;

use Src\Dominio\Aluno\Aluno;
use Src\App\Indicacao\EnviaEmailIndicacao;

class EnviaEmailComPhpMail implements EnviaEmailIndicacao
{
    private string $to;
    private string $subject;
    private string $message;
    private string $headers;

    public function __construct(string $to, string $subject, string $message, string $headers)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = $headers;
    }

    public function enviaPara(Aluno $alunoIndicao): void
    {
        mail($this->to, $this->subject, $this->message, $this->headers);   
    }
}
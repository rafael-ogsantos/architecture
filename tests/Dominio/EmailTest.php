<?php

namespace Test\Dominio;

use PHPUnit\Framework\TestCase;
use Src\Dominio\Email;

class EmailTest extends TestCase
{
    public function testEmailNoFormatoInvalidoNaoPodeExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email('Email Invalido');
    }

    public function testEmailDeveSerRepresentadoComoString()
    {
        $cpf = new Email('endereco@example.com');
        $this->assertSame('endereco@example.com', (string) $cpf);
    }
}


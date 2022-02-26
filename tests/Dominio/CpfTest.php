<?php

namespace Test\Dominio;

use PHPUnit\Framework\TestCase;
use Src\Dominio\CPF;

class CpfTest extends TestCase
{
    public function testCpfComNumeroNoFormatoInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new CPF('12345678910');
    }

    public function testCpfDeveSerRepresentadoComoString()
    {
        $cpf = new CPF('123.456.789-10');
        $this->assertSame('123.456.789-10', (string) $cpf);
    }
}


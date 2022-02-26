<?php

namespace Test\Dominio\Aluno;

use PHPUnit\Framework\TestCase;
use Src\Dominio\Aluno\Telefone;

class TelefoneTest extends TestCase
{
    public function testTelefoneDeveSerRepresentadoComoString()
    {
        $telefone = new Telefone('11', '22222222');
        $this->assertSame('(11) 22222222', (string) $telefone);
    }
    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('DDD invalido');
        new Telefone('(ddd)', '22222222');
    }
    
    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('Numero de telefone invalido');
        new Telefone('11', 'número');
    }
}


<?php

namespace Src\Dominio;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        if(filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException(
                'Endereço de email invalido'
            );
        }

        $this->endereco = $endereco;
    }
    
    public function __toString(): string
    {
        return $this->endereco;
    }
}
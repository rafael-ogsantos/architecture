<?php

namespace Src;

abstract class Servico
{
    public function valorCalculado(Orcamento $orcamento)
    {
        return $this->taxaEmCimaDeValor($orcamento);
    }

    abstract public function taxaEmCimaDeValor(Orcamento $orcamento);
}
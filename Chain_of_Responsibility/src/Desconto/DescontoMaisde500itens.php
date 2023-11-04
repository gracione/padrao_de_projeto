<?php

namespace Alura\DesignPattern\Desconto;

use Alura\DesignPattern\Orcamento;

class DescontoMaisde500itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.7;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}

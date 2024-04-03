<?php

namespace Alura\DesignPattern\Desconto;

use Alura\DesignPattern\Orcamento;

class DescontoMaisde5itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
        if ($orcamento->valor > 5) {
            $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}

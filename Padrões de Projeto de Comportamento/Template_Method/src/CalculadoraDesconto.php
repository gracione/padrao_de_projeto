<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Desconto\DescontoMaisde500itens;
use Alura\DesignPattern\Desconto\DescontoMaisde5itens;
use Alura\DesignPattern\Desconto\SemDesconto;

class CalculadoraDesconto
{
    public function calcula(Orcamento $orcamento): float
    {
        $cadeiaDesconto = new DescontoMaisde5itens(
            new DescontoMaisde500itens(
                new SemDesconto(null)
            )
        );

        return $cadeiaDesconto->calculaDesconto($orcamento);
    }
}

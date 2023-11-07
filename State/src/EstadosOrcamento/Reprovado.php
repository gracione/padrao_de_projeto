<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return 0;
    }

    public function finalizado(Orcamento $orcamento){
        $orcamento->estadoAtual = new Finalizado();
    }
}

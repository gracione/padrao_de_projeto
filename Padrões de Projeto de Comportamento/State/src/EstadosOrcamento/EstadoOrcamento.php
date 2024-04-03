<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @throw \DomainExcepetion
     */

    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento){
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }
    public function reprova(Orcamento $orcamento){
        throw new \DomainException('Este orçamento não pode ser reprovados');
    }
    public function finaliza(Orcamento $orcamento){
        throw new \DomainException('Este orçamento não pode ser finalizado');
    }
}

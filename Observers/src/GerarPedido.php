<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroItens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $this->dataFinalizado = new \DateTimeImmutable();
        $this->nomeCliente = $pedido->nomeCliente;
        $this->orcamento = $orcamento;
    }
    public function getNumeroItens() {
        return $this->numeroItens;
    }
    public function getValorOrcamento() {
        return $this->valorOrcamento;
    }
    public function getNomeCliente() {
        return $this->nomeCliente;
    }

}
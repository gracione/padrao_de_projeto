<?php

namespace Alura\DesignPattern;

class GerarPedidoHandlers
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
    ) {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $this->dataFinalizado = new \DateTimeImmutable();
        $this->nomeCliente = $this->nomeCliente;
        $this->orcamento = $orcamento;

        // PedidoRepository
        echo "Criar pedido no banco de dados". PHP_EOL;
    }
}
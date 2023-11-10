<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcoesAoGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoNoBanco;

class GerarPedidoHandlers
{

    //    public int $numeroItens;
//    public string $nomeCliente;
//    public string $valorOrcamento;
    private array $acoesAposGerarPedido = [];
    public function __construct()
    {
    }

    public function adicionarAcaoAoGerarPedido(AcoesAoGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }
    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $this->dataFinalizado = new \DateTimeImmutable();
        $this->nomeCliente = $gerarPedido->getNomeCliente();
        $this->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }

        // PedidoRepository
        echo "Criar pedido no banco de dados" . PHP_EOL;
    }
}
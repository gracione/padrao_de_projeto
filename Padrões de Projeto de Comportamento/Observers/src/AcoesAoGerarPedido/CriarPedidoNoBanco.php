<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Criando pedido no banco";
    }
}
<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogPedidoNoBanco implements AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Log pedido no banco";
    }
}
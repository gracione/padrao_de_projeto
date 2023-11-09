<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcoesAoGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
<?php
require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido, GerarPedidoHandlers};

$valorOrcamentos = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \Alura\DesignPattern\GerarPedido($valorOrcamentos, $numeroItens, $nomeCliente);
$gerarPedidoHandlers =  new GerarPedidoHandlers();
$gerarPedidoHandlers->adicionarAcaoAoGerarPedido(new \Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco());
$gerarPedidoHandlers->adicionarAcaoAoGerarPedido(new \Alura\DesignPattern\AcoesAoGerarPedido\LogPedidoNoBanco());
$gerarPedidoHandlers->execute($gerarPedido);


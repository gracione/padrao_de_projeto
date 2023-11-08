<?php
require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};

$valorOrcamentos = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \Alura\DesignPattern\GerarPedido($valorOrcamentos, $numeroItens, $nomeCliente);
$gerarPedido->execute();

echo "Cria Pedido na banco de dados". PHP_EOL;
echo "Envia e-mail para clientes". PHP_EOL;
<?php
require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};

$valorOrcamentos = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->quantidadeItens = $numeroItens;
$orcamento->valor = $valorOrcamentos;

$pedido = new Pedido();

echo "Cria Pedido na banco de dados". PHP_EOL;
echo "Envia e-mail para clientes". PHP_EOL;
<?php

use Alura\DesignPattern\CalculadoraDesconto;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 501;
$orcamento->quantidadeItens = 4;

echo $calculadora->calcula($orcamento);

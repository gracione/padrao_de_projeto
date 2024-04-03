<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icpp;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos;

$orcamento = new Orcamento();
$orcamento->valor = 301;
$orcamento->quantidadeItens = 4;

echo $calculadora->calcula($orcamento, new Icpp);
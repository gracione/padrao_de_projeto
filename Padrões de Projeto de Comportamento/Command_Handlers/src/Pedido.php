<?php

namespace Alura\DesignPattern;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizado;
    public Orcamento $orcamento;
}

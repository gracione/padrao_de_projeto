<?php

require 'vendor/autoload.php';

interface Product
{
    public function getName(): string;
}

class ConcreteProduct1 implements Product
{
    public function getName(): string
    {
        return "Produto 1";
    }
}

class ConcreteProduct2 implements Product
{
    public function getName(): string
    {
        return "Produto 2";
    }
}

class ProductFactory
{
    public static function createProduct($type)
    {
        switch ($type) {
            case '1':
                return new ConcreteProduct1();
            case '2':
                return new ConcreteProduct2();
            default:
                throw new \InvalidArgumentException("Tipo de produto desconhecido.");
        }
    }
}

$product1 = ProductFactory::createProduct('1');
echo $product1->getName();

$product2 = ProductFactory::createProduct('2');
echo $product2->getName();

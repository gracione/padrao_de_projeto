<?php

require 'vendor/autoload.php';

class Singleton
{
    private static $instance;
    public string $nome;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function someMethod()
    {
        return "Método executado na instância Singleton.";
    }
}

$singletonInstance = Singleton::getInstance();
echo $singletonInstance->someMethod();
$singletonInstance->setNome("jose");
echo $singletonInstance->getNome();

$segundoSingletonInstance = Singleton::getInstance();
echo $segundoSingletonInstance->getNome();

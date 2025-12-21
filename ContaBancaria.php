<?php

class ContaBancaria 
{
    public $banco;
    public $nomeTitular = "Gustavo Fraga";
    public $numeroAgencia = 3467;
    public $numeroConta;
    public $saldo = 1000;

    public function obterSaldo() {
        return "Seu saldo é: R$ {$this->saldo}";
    }
}

$conta = new ContaBancaria();
var_dump($conta->saldo);

$conta->saldo = 0;
var_dump($conta->obterSaldo());
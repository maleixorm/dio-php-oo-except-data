<?php

class ContaBancaria 
{
    public $banco;
    public $nomeTitular = "Gustavo Fraga";
    public $numeroAgencia = 3467;
    public $numeroConta;
    public $saldo;
}

$conta = new ContaBancaria();
var_dump($conta->numeroAgencia);
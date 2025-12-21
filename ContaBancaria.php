<?php

class ContaBancaria 
{
    public string $banco;
    public string $nomeTitular;
    public string $numeroAgencia;
    public string $numeroConta;
    public float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() {
        return "Seu saldo é: R$ {$this->saldo}";
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '1890',
    '82.009-5',
    300.00
);
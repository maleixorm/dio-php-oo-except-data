<?php

class ContaBancaria 
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() 
    {
        return "Seu saldo é: R$ {$this->saldo}\n";
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return "Depósito de R$ {$valor} realizado!\n";
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return "Saque de R$ {$valor} realizado!\n";
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '1890',
    '82.009-5',
    300.00
);

echo $conta->obterSaldo();
echo $conta->depositar(100);
echo $conta->obterSaldo();
echo $conta->sacar(30);
echo $conta->obterSaldo();
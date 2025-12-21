<?php

class Venda
{
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;

    public function __construct(string $data, string $produto, int $quantidade, float $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function exibirVenda()
    {
        return [
            'Data' => $this->data,
            'Produto' => $this->produto,
            'Quantidade' => $this->quantidade,
            'ValorTotal' => $this->valorTotal
        ];
    }
}

$produto1 = new Venda('21/02/2025', 'Pen Drive 32gb', 5, 200);
var_dump($produto1->exibirVenda());
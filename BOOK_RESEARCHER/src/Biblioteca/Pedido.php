<?php
namespace Biblioteca;

class Pedido
{
    private Leitor $cliente;
    
    private array $itens;
    private float $valorTotal;
    private \DateTime $data;

    public function __construct(Leitor $cliente, array $itens, float $valorTotal)
    {
        $this->cliente = $cliente;
        $this->itens = $itens;
        $this->valorTotal = $valorTotal;
        $this->data = new \DateTime();
    }

    public function getValorTotal(): float { return $this->valorTotal; }
    public function getCliente(): Leitor { return $this->cliente; }
    public function getItens(): array { return $this->itens; }
    public function getData(): \DateTime { return $this->data; }
}

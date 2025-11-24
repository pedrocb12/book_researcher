<?php
namespace Biblioteca;

class CarrinhoDeCompras
{
    private Leitor $dono;
   
    private array $itens = [];

    public function __construct(Leitor $dono)
    {
        $this->dono = $dono;
    }

    public function adicionar(Livro $livro, int $quantidade = 1): void
    {
        $id = $livro->getId();
        if (!isset($this->itens[$id])) {
            $this->itens[$id] = new ItemCarrinho($livro, $quantidade);
        } else {
            $this->itens[$id]->increaseQuantidade($quantidade);
        }
    }

    
    public function getItens(): array
    {
        return array_values($this->itens);
    }

    public function total(): float
    {
        $sum = 0.0;
        foreach ($this->itens as $it) {
            $sum += $it->getLivro()->getPreco() * $it->getQuantidade();
        }
        return $sum;
    }

    public function finalizar(): Pedido
    {
        $pedido = new Pedido($this->dono, $this->getItens(), $this->total());
        
        foreach ($this->itens as $it) {
            $it->getLivro()->reduzirEstoque($it->getQuantidade());
        }
        $this->itens = [];
        return $pedido;
    }
}

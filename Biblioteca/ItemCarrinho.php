<?php
namespace Biblioteca;

class ItemCarrinho
{
    private Livro $livro;
    private int $quantidade;

    public function __construct(Livro $livro, int $quantidade)
    {
        $this->livro = $livro;
        $this->quantidade = $quantidade;
    }

    public function getLivro(): Livro { return $this->livro; }
    public function getQuantidade(): int { return $this->quantidade; }
    public function increaseQuantidade(int $n): void { $this->quantidade += $n; }
}

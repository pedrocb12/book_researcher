<?php
namespace Biblioteca;

class Livro
{
    private int $id;
    private string $titulo;
    private string $autor;
    private float $preco;
    private int $estoque;
    private ?string $genero;

    public function __construct(int $id, string $titulo, string $autor, float $preco, int $estoque, ?string $genero = null)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->genero = $genero;
    }

    public function getId(): int { return $this->id; }
    public function getTitulo(): string { return $this->titulo; }
    public function getAutor(): string { return $this->autor; }
    public function getPreco(): float { return $this->preco; }
    public function getEstoque(): int { return $this->estoque; }
    public function getGenero(): ?string { return $this->genero; }
    public function reduzirEstoque(int $qt = 1): void { $this->estoque = max(0, $this->estoque - $qt); }
}

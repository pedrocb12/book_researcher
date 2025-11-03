<?php
namespace Biblioteca;

class Catalogo
{
    
    private array $livros = [];

    public function __construct(array $livros = [])
    {
        foreach ($livros as $l) {
            $this->adicionarLivro($l);
        }
    }

    public function adicionarLivro(Livro $livro): void
    {
        $this->livros[$livro->getId()] = $livro;
    }

   
    public function buscarPorTitulo(string $titulo): array
    {
        $res = [];
        foreach ($this->livros as $l) {
            if (stripos($l->getTitulo(), $titulo) !== false) {
                $res[] = $l;
            }
        }
        return $res;
    }

   
    public function buscarPorAutor(string $autor): array
    {
        $res = [];
        foreach ($this->livros as $l) {
            if (stripos($l->getAutor(), $autor) !== false) {
                $res[] = $l;
            }
        }
        return $res;
    }

   
    public function buscarPorGenero(string $genero): array
    {
        
        $res = [];
        foreach ($this->livros as $l) {
            if (method_exists($l, 'getGenero') && stripos($l->getGenero(), $genero) !== false) {
                $res[] = $l;
            }
        }
        return $res;
    }

    
    public function getLivros(): array
    {
        return array_values($this->livros);
    }
}

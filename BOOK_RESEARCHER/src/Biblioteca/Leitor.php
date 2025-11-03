<?php
namespace Biblioteca;

class Leitor
{
    private int $id;
    private string $nome;
    private string $email;
    private CarrinhoDeCompras $carrinho;

    public function __construct(int $id, string $nome, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->carrinho = new CarrinhoDeCompras($this);
    }

    public function buscarLivroPorTitulo(Catalogo $catalogo, string $titulo): array
    {
        return $catalogo->buscarPorTitulo($titulo);
    }

    public function adicionarAoCarrinho(Livro $livro, int $quantidade = 1): void
    {
        $this->carrinho->adicionar($livro, $quantidade);
    }

    public function finalizarCompra(): Pedido
    {
        return $this->carrinho->finalizar();
    }

   
    public function getId(): int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getEmail(): string { return $this->email; }
    public function getCarrinho(): CarrinhoDeCompras { return $this->carrinho; }
}

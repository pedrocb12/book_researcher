<?php
use PHPUnit\Framework\TestCase;
use Biblioteca\CarrinhoDeCompras;
use Biblioteca\Leitor;
use Biblioteca\Livro;

class CarrinhoDeComprasTest extends TestCase
{
    public function testTotal()
    {
        $l = new Livro(1, 'X', 'A', 3.0, 5);
        $leitor = new Leitor(1, 'N', 'e');
        $c = new CarrinhoDeCompras($leitor);
        $c->adicionar($l, 3);
        $this->assertEquals(9.0, $c->total());
    }
}

<?php
use PHPUnit\Framework\TestCase;
use Biblioteca\Pedido;
use Biblioteca\Leitor;
use Biblioteca\Livro;
use Biblioteca\ItemCarrinho;

class PedidoTest extends TestCase
{
    public function testGetValorTotal()
    {
        $l = new Livro(1,'X','A',4.0,2);
        $item = new ItemCarrinho($l,1);
        $leitor = new Leitor(1,'N','e');
        $pedido = new Pedido($leitor, [$item], 4.0);
        $this->assertEquals(4.0, $pedido->getValorTotal());
    }
}

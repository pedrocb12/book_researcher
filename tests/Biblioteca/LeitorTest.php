<?php
use PHPUnit\Framework\TestCase;
use Biblioteca\Leitor;
use Biblioteca\Livro;
use Biblioteca\Catalogo;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Leitor::class)]
class LeitorTest extends TestCase
{
    public function testAdicionarAoCarrinhoEFinalizar()
    {
        $l = new Livro(1, 'X', 'A', 5.0, 10);
        $leitor = new Leitor(1, 'Nome', 'e@mail');
        $leitor->adicionarAoCarrinho($l, 2);
        $pedido = $leitor->finalizarCompra();
        $this->assertEquals(10.0, $pedido->getValorTotal());
        $this->assertNotEmpty($leitor ->$id());
    }
}

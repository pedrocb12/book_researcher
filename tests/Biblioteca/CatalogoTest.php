<?php
use PHPUnit\Framework\TestCase;
use Biblioteca\Catalogo;
use Biblioteca\Livro;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Catalogo::class)]

class CatalogoTest extends TestCase
{
    public function testBuscarPorTitulo()
    {
        $l1 = new Livro(1, 'PHP para Iniciantes', 'Autor X', 10.0, 5);
        $l2 = new Livro(2, 'Aprenda Java', 'Autor Y', 12.0, 3);
        $cat = new Catalogo([$l1, $l2]);
        $res = $cat->buscarPorTitulo('PHP');
        $this->assertCount(1, $res);
         $this->assertNotEmpty($livros->getLivros());



    }
}

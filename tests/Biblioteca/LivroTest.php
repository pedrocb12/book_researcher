<?php
use PHPUnit\Framework\TestCase;
use Biblioteca\Livro;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Livro::class)]

class LivroTest extends TestCase
{
    public function testReduzirEstoque()
    {
        $l = new Livro(1, 'Test', 'A', 5.0, 2);
        $l->reduzirEstoque(1);
        $this->assertEquals(1, $l->getEstoque());
        $this->assertFileExists('./src/Biblioteca/livro.php');

    }
}

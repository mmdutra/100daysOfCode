<?php 

namespace Tests;

use Mmoraisd\Type;
use Mmoraisd\Guitar;
use PHPUnit\Framework\TestCase;

class GuitarTest extends Testcase
{
    public function testWillCreateAnInstanceOfGuitar()
    {
        $guitar = new Guitar("Strato", Type::ACOUSTIC, 100);

        $this->assertEquals($guitar->getPrice(), 100);
        $this->assertEquals($guitar->getName(), "Strato");
        $this->assertEquals($guitar->getType(), "acoustic");
    }
}
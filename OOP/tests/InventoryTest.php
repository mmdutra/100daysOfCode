<?php 

namespace Tests;

use Mmoraisd\Type;
use Mmoraisd\Guitar;
use Mmoraisd\Inventory;
use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase
{
    public function testWillCreateAnInstanceOfInventory()
    {
        $inventory = new Inventory();
        $this->assertInstanceOf(Inventory::class, $inventory);
    }

    public function testAddGuitarToInventory()
    {
        $inventory = new Inventory();

        $return = $inventory
            ->addGuitar(new Guitar("Folks", Type::ACOUSTIC, 5000))
            ->addGuitar(new Guitar("Strato", Type::ELETRIC, 10000));

        $this->assertEquals(2, count($inventory->getGuitars()));

        $this->assertInstanceOf(Inventory::class, $return);
    }

    public function testSearchGuitarsByName()
    {
        $inventory = new Inventory();

        $inventory
            ->addGuitar(new Guitar("Folks", Type::ACOUSTIC, 5000))
            ->addGuitar(new Guitar("Strato", Type::ELETRIC, 10000));

        $result = $inventory->searchGuitarByName("o");

        $this->assertTrue(count($result) == 2);
        $this->assertInstanceOf(Guitar::class, $result[0]);
    }

    public function testSearchGuitarsByType()
    {
        $inventory = new Inventory();

        $inventory
            ->addGuitar(new Guitar("Folks", Type::ACOUSTIC, 5000))
            ->addGuitar(new Guitar("Strato", Type::ELETRIC, 10000));

        $result = $inventory->searchGuitarByType("acoustic");

        $this->assertTrue(count($result) == 1);
        $this->assertInstanceOf(Guitar::class, $result[0]);       
    }
}
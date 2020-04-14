<?php 

namespace Mmoraisd;

use Mmoraisd\Guitar;

class Inventory
{
    private array $guitars;

    function __construct()
    {
        $this->guitars = [];
    }

    public function addGuitar(Guitar $guitar)
    {
        $this->guitars[] = $guitar;

        return $this;
    }

    public function getGuitars(): array
    {
        return $this->guitars;
    }

    public function searchGuitarByName(string $name): array
    {
        return array_filter($this->guitars, function ($item) use ($name)
        {
            return (strpos($item->getName(), $name) !== false);        
        });
    }
    
    public function searchGuitarByType(string $type): array
    {
        return array_filter($this->guitars, function ($item) use ($type)
        {
            return $item->getType() === $type;        
        });
    }
}
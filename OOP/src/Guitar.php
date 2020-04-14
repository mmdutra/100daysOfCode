<?php 

namespace Mmoraisd;

class Guitar 
{

    private static int $CREATE_ID = 0;

    private int $id;
    private string $name;
    private string $type;
    private float $price;
    
    function __construct(string $name, string $type, float $price)
    {
        self::$CREATE_ID++;
        
        $this->id = self::$CREATE_ID;

        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
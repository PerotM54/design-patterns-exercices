<?php

namespace App;

class GPU extends ComputerDecorator
{
    private $price = 200;

    public function getPrice(): int
    {
        return parent::getPrice() + $this->price;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . " avec un GPU";
    }
}
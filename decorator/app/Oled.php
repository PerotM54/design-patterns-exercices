<?php

namespace App;

class Oled extends ComputerDecorator
{
    private $price = 100;

    public function getPrice(): int
    {
        return parent::getPrice() + $this->price;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . " avec un écran OLED";
    }
}
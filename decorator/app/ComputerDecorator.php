<?php

namespace App;

abstract class ComputerDecorator implements Computer
{

    protected Computer $computer;

    public function __construct($computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        // TODO: Implement getPrice() method.
        return $this->computer->getPrice();
    }

    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
        return $this->computer->getDescription();
    }
}
<?php

namespace Test;

use App\GPU;
use App\Oled;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptopWithGPU = new GPU(new Laptop());
        $this->assertSame(true, $laptopWithGPU->getPrice() === 600);
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptopWithOled = new Oled(new Laptop());
        $this->assertSame(true, $laptopWithOled->getPrice() === 500);
    }
}
<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class EntityFactory
{
    public static function createVehicle(string $type) {
        return match ($type) {
            'bicycle' => new Bicycle(0, "air"),
            'car' => new Car(50, "essence"),
            'truck' => new Truck(200, "diesel"),
            default => null,
        };
    }

    public static function getVehicleByCriteria(float $distance, float $weight) {
        if ($weight > 200) {
            return new Truck(200, "diesel");
        }
        if ($weight > 20 || $distance >= 20) {
            return new Car(50, "essence");
        }
        return new Bicycle(0, "air");
    }
}
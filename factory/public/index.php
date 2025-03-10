<?php

use App\Factory\EntityFactory;

require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

$car = EntityFactory::createVehicle('car');
echo $car->getCostPerKm() . PHP_EOL;

$truck = EntityFactory::createVehicle('truck');
echo $truck->getCostPerKm() . PHP_EOL;

$bicycle = EntityFactory::createVehicle('bicycle');
echo $bicycle->getCostPerKm() . PHP_EOL;

$test = EntityFactory::getVehicleByCriteria(15, 50);

echo get_class($test);

$test2 = EntityFactory::getVehicleByCriteria(15, 5000);

echo get_class($test2);
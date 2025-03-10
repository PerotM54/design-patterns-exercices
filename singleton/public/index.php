<?php

use App\Config;

require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = Config::getInstance();

echo $config->get("apiKey") . PHP_EOL;

$config->set("test", "testtt");

$config2 = Config::getInstance();

echo $config2->get("apiKey") . PHP_EOL;

echo $config2->get("test");
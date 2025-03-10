<?php

use App\MySQLQueryBuilder;

require('../vendor/autoload.php');

$mysqlQuery = (new MySqlQueryBuilder())
    ->select(["id", "name"])
    ->from("users")
    ->where("age > 18")
    ->where("status = 'active'")
    ->getQuery();

echo $mysqlQuery;